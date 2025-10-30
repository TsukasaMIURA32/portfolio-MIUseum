document.querySelectorAll('.thumb-img').forEach(thumb => {
    thumb.addEventListener('click', () => {
        const projectId = thumb.dataset.projectId;
        const mainContainer = document.getElementById(`main-img-container-${projectId}`);
        const introContainer = document.getElementById(`project-intro-${projectId}`);

        if (!mainContainer || !introContainer) return;

        // メイン画像切り替え
        if (thumb.dataset.videoUrl) {
            const videoId = thumb.dataset.videoUrl.includes('youtu.be') 
                ? thumb.dataset.videoUrl.split('/')[3] 
                : new URLSearchParams(new URL(thumb.dataset.videoUrl).search).get('v');

            mainContainer.innerHTML = `<iframe width="100%" height="400" src="https://www.youtube.com/embed/${videoId}" frameborder="0" allowfullscreen></iframe>`;
        } else {
            mainContainer.innerHTML = `<img src="${thumb.src}" class="img-fluid">`;
        }

        // 説明文切り替え
        introContainer.innerHTML = `
            <h6>${thumb.dataset.subTitle}</h6>
            <p>${thumb.dataset.content}</p>
        `;
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const modalEl = document.getElementById('projectModal');

    if (!modalEl) return;

    // カードクリックでモーダル表示
    document.querySelectorAll('.card-wrapper').forEach(wrapper => {
        wrapper.addEventListener('click', e => {
            // いいねボタンやタグクリックは除外
            if (e.target.closest('.like-button') || e.target.closest('.badge')) return;

            const projectId = wrapper.dataset.projectId;
            const title = wrapper.querySelector('.card-title')?.textContent || '';

            // モーダルタイトル
            const modalTitle = modalEl.querySelector('.modal-title');
            if (modalTitle) modalTitle.textContent = title;

            // いいねアイコン・カウント同期
            const cardLikeIcon = wrapper.querySelector('.like-button i');
            const cardLikeCount = wrapper.querySelector('.like-count')?.textContent || '0';
            const modalLikeIcon = modalEl.querySelector('.like-button-modal i');
            const modalLikeCount = modalEl.querySelector('.like-count-modal');

            if (modalLikeIcon) {
                if (cardLikeIcon?.classList.contains('fa-solid')) {
                    modalLikeIcon.classList.add('fa-solid');
                    modalLikeIcon.classList.remove('fa-regular');
                } else {
                    modalLikeIcon.classList.add('fa-regular');
                    modalLikeIcon.classList.remove('fa-solid');
                }
            }
            if (modalLikeCount) modalLikeCount.textContent = cardLikeCount;

            // ギャラリー表示切り替え
            document.querySelectorAll('.project-gallery').forEach(el => el.style.display = 'none');
            const gallery = document.getElementById(`gallery-${projectId}`);
            if (gallery) gallery.style.display = 'block';

            // プロジェクト紹介文初期表示（cardsのdatasetまたは projects テーブルの introduction）
            const introContainer = modalEl.querySelector('#project-introduction');
            if (introContainer) {
                introContainer.innerHTML = `<p>${wrapper.dataset.introduction || ''}</p>`;
            }

            // モーダル表示
            const modal = new bootstrap.Modal(modalEl);
            modal.show();

            document.querySelectorAll('.modal').forEach(modalEl => {
                const modalLikeBtn = modalEl.querySelector('.like-button-modal');
                const modalLikeCount = modalEl.querySelector('.like-count-modal');
                const modalLikeIcon = modalLikeBtn?.querySelector('i');
            
                if (modalLikeBtn && modalLikeCount && modalLikeIcon) {
                    modalLikeBtn.addEventListener('click', async (e) => {
                        e.stopPropagation();
                        const projectId = modalEl.dataset.projectId; // モーダルのdata-project-id属性から取得
                        const liked = modalLikeIcon.classList.contains('fa-solid');
                        modalLikeIcon.classList.toggle('fa-solid', !liked);
                        modalLikeIcon.classList.toggle('fa-regular', liked);
            
                        try {
                            const response = await fetch(`/projects/${projectId}/like`, {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                                }
                            });
                            if (response.ok) {
                                const data = await response.json();
                                modalLikeCount.textContent = data.like_count;
            
                                // カード側も同期
                                const card = document.querySelector(`.card-wrapper[data-project-id="${projectId}"]`);
                                const cardCountSpan = card?.querySelector('.like-count');
                                const cardIcon = card?.querySelector('.like-button i');
                                if (cardCountSpan) cardCountSpan.textContent = data.like_count;
                                if (cardIcon) {
                                    cardIcon.classList.toggle('fa-solid', !liked);
                                    cardIcon.classList.toggle('fa-regular', liked);
                                }
                            }
                        } catch (err) { console.error(err); }
                    });
                }
            });
            
        });
    });
});

document.querySelectorAll('.modal').forEach(modalEl => {
    modalEl.addEventListener('hidden.bs.modal', () => {
        if (swiper.autoplay) swiper.autoplay.start();
    });
});

document.addEventListener('DOMContentLoaded', function() {
    // 全てのモーダルに対して処理
    document.querySelectorAll('.modal').forEach(modal => {
        const projectId = modal.id.replace('projectModal-', '');
        const introContainer = modal.querySelector(`#project-intro-${projectId}`);
        const mainImgContainer = modal.querySelector(`#main-img-container-${projectId}`);
        const header = modal.querySelector('.modal-header');

        if (!introContainer || !mainImgContainer) return;

        // 初期状態の内容を保存（innerHTMLでまるごと保持）
        const initialIntro = introContainer.innerHTML;
        const initialMain = mainImgContainer.innerHTML;

        // ✅ サムネイルクリック時（現状の切替ロジックがあるならここは既存のままでOK）

        // ✅ モーダルヘッダークリック時に初期状態へ戻す
        header.addEventListener('click', () => {
            introContainer.innerHTML = initialIntro;
            mainImgContainer.innerHTML = initialMain;
        });
    });
});




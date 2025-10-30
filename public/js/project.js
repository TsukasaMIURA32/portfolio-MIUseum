document.addEventListener('DOMContentLoaded', () => {
    // カード・モーダルいいね処理
    const handleLike = async (button, countSpan) => {
        const projectId = button.dataset.projectId;
        if (!projectId) return;

        const icon = button.querySelector('i');
        const liked = icon.classList.contains('fa-solid');

        // アイコン即時切替
        icon.classList.toggle('fa-solid', !liked);
        icon.classList.toggle('fa-regular', liked);

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
                countSpan.textContent = data.like_count;

                // カードとモーダルのカウントを同期
                const card = document.querySelector(`.card-wrapper[data-project-id="${projectId}"] .like-count`);
                if (card) card.textContent = data.like_count;

                const modalCount = document.querySelector(`#projectModal-${projectId} .like-count-modal`);
                if (modalCount) modalCount.textContent = data.like_count;
            }
        } catch (err) { console.error(err); }
    };

    // カードのいいね
    document.querySelectorAll('.like-button').forEach(btn => {
        btn.addEventListener('click', e => {
            e.stopPropagation(); // モーダル開かないように
            const countSpan = btn.nextElementSibling;
            if (!countSpan) return;
            handleLike(btn, countSpan);
        });
    });

    document.querySelectorAll('.like-button').forEach(btn => {
        btn.addEventListener('click', e => {
            e.stopPropagation(); // これでカードの click を止める
            const countSpan = btn.nextElementSibling;
            if (!countSpan) return;
            handleLike(btn, countSpan);
        });
    });
    

});


// モーダル内サムネクリック
document.querySelectorAll('.thumb-img').forEach(thumb => {
    thumb.addEventListener('click', function() {
        const projectId = this.dataset.projectId;
        const mainImg = document.getElementById(`main-img-${projectId}`);
        if (mainImg) {
            if (this.dataset.videoUrl) {
                const videoId = this.dataset.videoUrl.includes('youtu.be')
                    ? this.dataset.videoUrl.split('/')[3]
                    : new URLSearchParams(new URL(this.dataset.videoUrl).search).get('v');
                mainImg.outerHTML = `<iframe width="100%" height="400" src="https://www.youtube.com/embed/${videoId}" frameborder="0" allowfullscreen></iframe>`;
            } else {
                mainImg.src = this.src;
            }
        }

        const introContainer = document.getElementById('project-introduction');
        if (introContainer) {
            introContainer.innerHTML = `<h6>${this.dataset.subTitle}</h6><p>${this.dataset.content}</p>`;
        }
    });
});

// タグフィルター
const tagChips = document.querySelectorAll('.tag-chip');
const projectCards = document.querySelectorAll('.project-card');

tagChips.forEach(chip => {
    chip.addEventListener('click', () => {
        const tagId = chip.dataset.tagId;
        const categoryId = chip.dataset.categoryId;
        const activeColor = {1:'#FFB6C1',2:'#87CEFA',3:'#90EE90',4:'#FFD700',5:'#FEB1AF'}[categoryId] || '#f7f7f7';
        const isActive = chip.classList.toggle('active');
        chip.style.backgroundColor = isActive ? activeColor : '#f7f7f7';

        projectCards.forEach(card => {
            const cardTags = card.dataset.tags?.split(',') || [];
            if (isActive && cardTags.includes(tagId)) {
                card.style.display = 'block';
            } else if (!Array.from(tagChips).some(c => c.classList.contains('active') && cardTags.includes(c.dataset.tagId))) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
});

// Swiper 初期化
const swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 16,
    loop: true,
    speed: 5000,
    freeMode: true,
    autoplay: {
        delay: 0,
        disableOnInteraction: false,
    },
    breakpoints: {
        992: { slidesPerView: 4 },
        768: { slidesPerView: 2 },
        0: { slidesPerView: 1 }
    }
});

    // モーダル閉じたら再開
    document.querySelectorAll('.modal').forEach(modalEl => {
        modalEl.addEventListener('hidden.bs.modal', () => {
            if (swiper.autoplay) swiper.autoplay.start();
        });
    });




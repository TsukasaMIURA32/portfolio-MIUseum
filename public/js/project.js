document.addEventListener('DOMContentLoaded', () => {

    // =====================================
    // 🎞 モーダル内サムネ切り替え
    // =====================================
    document.querySelectorAll('.thumb-img').forEach(thumb => {
        thumb.addEventListener('click', function () {
            const parentGallery = this.closest('.project-gallery');
            if (!parentGallery) return;

            const mainContainer = parentGallery.querySelector('.main-image');
            const introContainer = parentGallery.closest('.modal-body')?.querySelector('.project-introduction');

            // アクティブ枠更新
            parentGallery.querySelectorAll('.thumb-img').forEach(t => t.classList.remove('active-thumb'));
            this.classList.add('active-thumb');

            // 内容切り替え（動画 or 画像）
            if (this.dataset.video) {
                const videoId = this.dataset.video.includes('youtu.be')
                    ? this.dataset.video.split('/')[3]
                    : new URLSearchParams(new URL(this.dataset.video).search).get('v');
                mainContainer.innerHTML = `
                    <iframe 
                        src="https://www.youtube.com/embed/${videoId}" 
                        frameborder="0" 
                        allowfullscreen 
                        class="rounded shadow w-100" 
                        style="aspect-ratio: 16 / 9;">
                    </iframe>`;
            } else if (this.dataset.image) {
                mainContainer.innerHTML = `
                    <img src="${this.dataset.image}" class="img-fluid rounded shadow" alt="">
                `;
            }

            // 説明文切り替え
            if (introContainer) {
                introContainer.innerHTML = `
                    <h6>${this.dataset.subTitle || ''}</h6>
                    <p>${this.dataset.content || ''}</p>
                `;
            }
        });
    });

// =====================================
// 🏷 タグフィルター機能（単一選択モード）
// =====================================
const tagChips = document.querySelectorAll('.tag-chip');
const projectCards = document.querySelectorAll('.card-wrapper');

tagChips.forEach(chip => {
    chip.addEventListener('click', () => {
        const selectedTag = chip.textContent.trim();
        const isAlreadyActive = chip.classList.contains('active');

        // ✅ 全チップの active を外す
        tagChips.forEach(c => c.classList.remove('active'));

        // ✅ 同じチップをもう一度押した場合 → 全件表示
        if (isAlreadyActive) {
            projectCards.forEach(card => {
                card.parentElement.style.display = '';
            });
            return;
        }

        // ✅ 押されたチップだけ active に
        chip.classList.add('active');

        // ✅ 表示切替
        projectCards.forEach(card => {
            const tagTexts = Array.from(card.querySelectorAll('.badge')).map(b => b.textContent.trim());
            const match = tagTexts.includes(selectedTag);
            card.parentElement.style.display = match ? '' : 'none';
        });
    });
});

// ✅ ダブルクリックでリセット
const tagFilter = document.getElementById('tag-filter');
if (tagFilter) {
    tagFilter.addEventListener('dblclick', () => {
        tagChips.forEach(c => c.classList.remove('active'));
        projectCards.forEach(p => p.parentElement.style.display = '');
    });
}

    // =====================================
    // 🌀 Swiper 初期化（4→3→2→1枚切り替え）
    // =====================================
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,       
        slidesPerGroup: 1,
        spaceBetween: 24, // ✅ これが gap 代わりになる
        loop: true,
        centeredSlides: false,
        speed: 1500,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            enabled: false,   // ✅ これで完全オフ
          },
          scrollbar: {
            el: ".swiper-scrollbar",
            hide: true,  // ✅ 非表示
          },
        breakpoints: {
          1200: { slidesPerView: 3,spaceBetween: 24},
          768:  { slidesPerView: 2,spaceBetween: 16},
          0:    { slidesPerView: 1,spaceBetween: 12}, // ✅ 少し見切れ演出
        },
      });
      

    // モーダル閉じたら再開
    document.querySelectorAll('.modal').forEach(modalEl => {
        modalEl.addEventListener('hidden.bs.modal', () => {
            if (swiper.autoplay) swiper.autoplay.start();
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {

    // =====================================
    // 🎞 モーダル内サムネ切り替え
    // =====================================
    document.querySelectorAll('.thumb-img').forEach(thumb => {
        thumb.addEventListener('click', function () {
            const parentGallery = this.closest('.project-gallery');
            if (!parentGallery) return;

            const mainContainer = parentGallery.querySelector('.main-image');
            const introContainer = parentGallery.closest('.modal-body').querySelector('.project-introduction');

            // アクティブ枠更新
            parentGallery.querySelectorAll('.thumb-img').forEach(t => t.classList.remove('active-thumb'));
            this.classList.add('active-thumb');

            // 内容切り替え
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
    // 🏷 タグフィルター機能
    // =====================================
    const tagChips = document.querySelectorAll('.tag-chip');
    const projectCards = document.querySelectorAll('.card-wrapper');

    tagChips.forEach(chip => {
        chip.addEventListener('click', () => {
            const selectedTag = chip.textContent.trim();
            const isActive = chip.classList.toggle('active');

            // 見た目リセット
            tagChips.forEach(c => c.classList.remove('bg-pink', 'text-white'));
            if (isActive) chip.classList.add('bg-pink', 'text-white');

            projectCards.forEach(card => {
                const tagTexts = Array.from(card.querySelectorAll('.badge')).map(b => b.textContent.trim());
                if (isActive && tagTexts.includes(selectedTag)) {
                    card.parentElement.style.display = '';
                } else if (!isActive) {
                    card.parentElement.style.display = '';
                } else {
                    card.parentElement.style.display = 'none';
                }
            });
        });
    });

    // ダブルクリックでリセット
    document.getElementById('tag-filter').addEventListener('dblclick', () => {
        tagChips.forEach(c => c.classList.remove('active', 'bg-pink', 'text-white'));
        projectCards.forEach(p => p.parentElement.style.display = '');
    });


    // =====================================
    // 🌀 Swiper 初期化
    // =====================================
    const swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 16,
        loop: false,
        freeMode: true,
        speed: 5000,
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
});

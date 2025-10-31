document.addEventListener('DOMContentLoaded', function() {
    // 各モーダルごとに処理
    document.querySelectorAll('.project-gallery').forEach(gallery => {

        const mainContainer = gallery.querySelector('.main-image');
        const introBox = gallery.closest('.modal-content').querySelector('.project-introduction');

        gallery.querySelectorAll('.thumb-img').forEach(thumb => {
            thumb.addEventListener('click', function() {
                const newImage = this.dataset.image;
                const newVideo = this.dataset.video;
                const subTitle = this.dataset.subTitle || '';
                const content = this.dataset.content || '';

                // メイン差し替え
                mainContainer.innerHTML = '';

                if (newVideo) {
                    const iframe = document.createElement('iframe');
                    iframe.src = newVideo.replace('youtu.be/', 'www.youtube.com/embed/');
                    iframe.frameBorder = '0';
                    iframe.allowFullscreen = true;
                    iframe.classList.add('rounded', 'shadow', 'w-100');
                    iframe.style.aspectRatio = '16 / 9';
                    mainContainer.appendChild(iframe);
                } else if (newImage) {
                    const img = document.createElement('img');
                    img.src = newImage;
                    img.classList.add('img-fluid', 'rounded', 'shadow');
                    mainContainer.appendChild(img);
                }

                // 説明差し替え
                if (introBox) {
                    introBox.innerHTML = `
                        <h6>${subTitle}</h6>
                        <p>${content}</p>
                    `;
                }

                // アクティブ表示
                gallery.querySelectorAll('.thumb-img').forEach(img => img.classList.remove('active-thumb'));
                this.classList.add('active-thumb');
            });
        });

        // ✅ モーダルが開いたときに、最初のthumb-imgを自動クリック
        const modal = gallery.closest('.modal');
        if (modal) {
            modal.addEventListener('shown.bs.modal', () => {
                const firstThumb = gallery.querySelector('.thumb-img');
                if (firstThumb) firstThumb.click();
            });
        }
    });
});

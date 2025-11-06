window.addEventListener('load', () => {
    const loader = document.getElementById('loading-screen');

    // 0.5秒後にフェードアウト開始
    setTimeout(() => {
        loader.classList.add('hide');
    }, 500);

    // アニメーション終了後に非表示にする
    loader.addEventListener('transitionend', () => {
        loader.style.display = 'none';
    }, { once: true });
});

//スクロールダウン
document.addEventListener("DOMContentLoaded", () => {
    const scrollBtn = document.getElementById("scroll-down");
    const nextSection = document.getElementById("section2");

    scrollBtn.addEventListener("click", () => {
        nextSection.scrollIntoView({ behavior: "smooth" });
    });
});


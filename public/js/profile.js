document.addEventListener("DOMContentLoaded", () => {
    const bars = document.querySelectorAll(".progress");
  
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // CSS変数 --level の値を取得
          const level = getComputedStyle(entry.target).getPropertyValue("--level");
          entry.target.style.width = level;
        } else {
          // 画面外に出たらリセット（何度でもアニメ再生できる）
          entry.target.style.width = "0";
        }
      });
    }, { threshold: 0.5 });
  
    bars.forEach(bar => observer.observe(bar));

      // カードクリックで遷移
    document.querySelectorAll('.terminal-window[data-link]').forEach(card => {
      card.addEventListener('click', e => {
        const link = card.dataset.link;
        if (link) window.location.href = link;
      });
    });

    // 内部リンクはカードクリックを無効化
    document.querySelectorAll('.link-inside').forEach(link => {
      link.addEventListener('click', e => e.stopPropagation());
    });
  });

  document.querySelectorAll('.terminal-window').forEach(win => {
    win.addEventListener('click', () => {
      const link = win.dataset.link;
      if (link) {
        // 遷移前の演出を入れたいならここでアニメ追加
        win.classList.add('terminal-open'); // ←例えば光るとか
        setTimeout(() => {
          window.location.href = link;
        }, 400); // 0.4秒後に遷移（アニメ時間に合わせて）
      }
    });
  });
  
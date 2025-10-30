document.addEventListener("DOMContentLoaded", () => {
  const ctx = document.getElementById("skillRadar");
  if (!ctx) return;

  // ======= 🌈 カラーパレット（トップページと統一） =======
  const colors = ["#f59ed6", "#87cefa", "#ffe28a", "#a4e2b3", "#caa7ff"];

  // ======= 📘 スキル説明データ =======
  const skillDescriptions = {
    "Front-end": `
      <h4 class="text-pink">Front-end Development</h4>
      <p>HTML / CSS / JavaScript / Bootstrap を用いたUI構築。<br>
      レスポンシブ対応・アニメーション実装など、ビジュアル面に強み。</p>
    `,
    "Back-end": `
      <h4 class="text-blue">Back-end Development</h4>
      <p>PHP（Laravel）やJava（Spring Boot）によるWebアプリ構築。<br>
      認証機能・CRUD処理・DB設計など、システム面を支える実装。</p>
    `,
    "Design": `
      <h4 class="text-yellow">Design & Creative</h4>
      <p>Photoshop / Illustrator によるデザイン制作やUI調整。<br>
      コードとデザインを行き来しながら魅せる構成が得意。</p>
    `,
    "Office": `
      <h4 class="text-green">Office / Management</h4>
      <p>大学・エンタメ現場での制作進行や調整対応経験。<br>
      チーム全体の橋渡しとして業務を円滑に進行。</p>
    `,
    "Communication": `
      <h4 class="text-purple">Communication / English</h4>
      <p>TOEIC 905。海外チームとの英語コミュニケーション経験あり。<br>
      技術ドキュメント・打合せ・翻訳も対応可能。</p>
    `
  };

  // ======= 📊 レーダーチャート作成 =======
  const radarChart = new Chart(ctx, {
    type: "radar",
    data: {
      labels: ["Front-end", "Back-end", "Design", "Office", "Communication"],
      datasets: [
        {
          label: "Skill Level",
          data: [80, 60, 40, 80, 100],
          borderColor: "#ffd6f5",
          backgroundColor: "rgba(255,214,245,0.15)",
          borderWidth: 2,
          pointStyle: "star",
          pointRadius: 12,
          pointHoverRadius: 16,
          pointHoverBorderWidth: 4,
          pointHoverBorderColor: "#fff",
          // 各頂点のカラー
          pointBackgroundColor: (ctx) => colors[ctx.dataIndex],
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false, // ← これでレスポンシブOK！
      scales: {
        r: {
          min: 0,
          max: 100,
          ticks: { stepSize: 20, color: "#aaa" },
          grid: { color: "rgba(255,255,255,0.1)" },
          angleLines: { color: "rgba(255,255,255,0.2)" },
          pointLabels: { color: "#fff", font: { size: 14 } },
        },
      },
      plugins: {
        legend: { display: false },
        tooltip: { enabled: false }, // ← デフォルトのツールチップ無効化
      },

      // ======= 🌟 ホバー時に詳細表示 =======
      onHover: (event, elements) => {
        const panel = document.getElementById("skill-details");
        if (elements.length) {
          const label = radarChart.data.labels[elements[0].index];
          panel.innerHTML = skillDescriptions[label] || "";
          panel.style.boxShadow = "0 0 20px rgba(255,255,255,0.3)";
        } else {
          panel.innerHTML = `<p>スキル名にカーソルを合わせるかクリックして詳細をチェック 🚀</p>`;
          panel.style.boxShadow = "none";
        }
      },

      // ======= 🚀 クリック時にも固定表示 =======
      onClick: (event, elements) => {
        const panel = document.getElementById("skill-details");
        if (elements.length) {
          const label = radarChart.data.labels[elements[0].index];
          panel.innerHTML = skillDescriptions[label] || "";
          panel.style.boxShadow = "0 0 25px rgba(255,255,255,0.5)";
        }
      },
    },
  });
});

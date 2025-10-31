@push('styles')
<link rel="stylesheet" href="{{ asset('css/card.css') }}">
@endpush

<div class="modal fade" id="projectModal-2" tabindex="-1" aria-labelledby="projectModalLabel-2" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content border-pink">
      
      <!-- ヘッダー部分 -->
      <div class="modal-header d-flex justify-content-between align-items-center">
        <div class="like-container ms-4 justify-content-center w-100">
          <div class="row">
            <div class="col-md-11 p-0">
              <h6 class="fw-bold display-6">神経衰弱ゲーム</h6>
            </div>
            <div class="col-md-1">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
          </div>

          <div class="row align-items-center mt-2">
            <div class="col-md-9">
              <p class="m-0">
                JavaScript講習の最終課題として制作した、トランプを使った神経衰弱ゲームです。<br>
                カードをめくってペアを揃える、シンプルながらもアニメーションや制御ロジックに工夫を凝らしました。
              </p>
            </div>

            <div class="col-md-3 text-end">
              <a href="https://memory-game-miura-cb263bd2b494.herokuapp.com/"
                 target="_blank"
                 class="btn btn-pink text-lgrey btn-sm">
                <i class="fa-regular fa-rocket-launch"></i>
                <span class="fs-small"> PLAY the GAME</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- 本文 -->
      <div class="modal-body">
        <div class="row">
          
          <!-- 左側：説明 -->
          <div class="col-md-5">
            <div class="project-introduction" id="intro-memorygame">
              <h6>神経衰弱ゲームの挙動を収録した動画です。</h6>
              <p>
                実際にカードをクリックしてプレイする様子を紹介した動画です。<br>
                jQueryを用いたDOM操作・イベント制御・アニメーション処理・状態管理などを総合的に学び、
                JavaScriptによるインタラクティブなUI構築スキルを実践的に身につけました。<br><br>
                本課題を通して「関数による処理分割」「条件分岐・配列操作」
                「時間制御（setInterval / setTimeout）」などの基礎文法だけでなく、
                ユーザー視点での操作感・ゲームフロー設計の重要性も学びました。
              </p>
            </div>
          </div>

          <!-- 右側：動画とサムネ -->
          <div class="col-md-7">
            <div class="project-gallery" id="gallery-memorygame">
              
              <!-- メイン表示（YouTube埋め込み） -->
              <div class="main-image mb-2" id="main-memorygame">
                <iframe 
                  src="https://www.youtube.com/embed/37EVdRZoI_Q"
                  frameborder="0"
                  allowfullscreen
                  class="rounded shadow w-100"
                  style="aspect-ratio: 16 / 9;">
                </iframe>
              </div>

              <!-- サムネイル群 -->
              <div class="thumbnail-images d-flex flex-wrap gap-2">

                <!-- YouTube動画サムネ（再生アイコン付き） -->
                <div class="thumb-video img-thumbnail">
                  <img src="https://img.youtube.com/vi/37EVdRZoI_Q/hqdefault.jpg"
                       alt="神経衰弱ゲーム動画サムネ"
                       class="thumb-img"
                       data-sub-title="神経衰弱ゲームの挙動を収録した動画です。"
                       data-content="jQueryを用いたDOM操作・イベント制御・アニメーション処理・状態管理などを学びました。"
                       data-video="https://youtu.be/37EVdRZoI_Q">
                </div>

                <!-- カード画像 -->
                <img src="{{ asset('images/memory-game1.png') }}"
                     class="img-thumbnail thumb-img"
                     alt="神経衰弱ゲーム カード画像"
                     data-sub-title="ゲームプレイ画面"
                     data-content="カードのめくり・一致判定・リセット処理など、DOM操作とアニメーションを組み合わせて実装しました。"
                     data-image="{{ asset('images/memory-game1.png') }}">
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<script src="{{ asset('js/project-modal.js') }}"></script>

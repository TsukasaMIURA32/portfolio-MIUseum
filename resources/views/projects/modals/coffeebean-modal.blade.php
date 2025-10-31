@push('styles')
<link rel="stylesheet" href="{{ asset('css/card.css') }}">
@endpush

<div class="modal fade" id="projectModal-3" tabindex="-1" aria-labelledby="projectModalLabel-3" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content border-pink">

      <!-- ヘッダー -->
      <div class="modal-header d-flex justify-content-between align-items-center">
        <div class="like-container ms-4 justify-content-center w-100">
          <div class="row">
            <div class="col-md-11 p-0">
              <h6 class="fw-bold display-6">COFFEE SHOP ONLINE</h6>
            </div>
            <div class="col-md-1">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
          </div>

          <div class="row align-items-center mt-2">
            <div class="col-md-9">
              <p class="m-0">
                Bootstrapを用いて制作した、オンラインコーヒーショップの静的Webサイトです。<br>
                授業課題の最終制作として、「デザイン構成・レイアウト設計・UIの一貫性」を意識しながら、
                サイト全体の完成度と雰囲気づくりにこだわりました。
              </p>
            </div>

            <div class="col-md-3 text-end">
              <a href="https://cooffee-bean-a0c58b900a36.herokuapp.com/"
                 target="_blank"
                 class="btn btn-pink text-lgrey btn-sm">
                <i class="fa-regular fa-rocket-launch"></i>
                <span class="fs-small"> VISIT WEBSITE</span>
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
            <div class="project-introduction" id="intro-coffeebean">
              <h6>COFFEE SHOP ONLINE の紹介動画です。</h6>
              <p>
                シンプルながらも心地よい「カフェの世界観」をWeb上で再現することをテーマに、
                配色・余白・フォントバランスを丁寧に調整しました。<br><br>

                Bootstrapを活用して、各セクションのレスポンシブデザインや整ったグリッド構成を実現。
                直感的に操作できるナビゲーションや視線誘導を意識したボタン配置により、
                初めて訪れたユーザーでも迷わず操作できる構成に仕上げました。<br><br>

                また、アニメーションやホバー効果を取り入れ、
                ショップの温かみと上質さを感じられるデザインを追求しました。<br><br>

                この制作を通して、**HTML/CSSの構造設計力**や
                **Bootstrapを使ったUI構築の実践的スキル**を磨くことができました。
              </p>
            </div>
          </div>

          <!-- 右側：動画＋サムネイル -->
          <div class="col-md-7">
            <div class="project-gallery" id="gallery-coffeebean">
              
              <!-- メイン（YouTube動画） -->
              <div class="main-image mb-2" id="main-coffeebean">
                <iframe 
                  src="https://www.youtube.com/embed/C1jfgmH_abE"
                  frameborder="0"
                  allowfullscreen
                  class="rounded shadow w-100"
                  style="aspect-ratio: 16 / 9;">
                </iframe>
              </div>

              <!-- サムネイル -->
              <div class="thumbnail-images d-flex flex-wrap gap-2">

                <!-- YouTube動画サムネ -->
                <img src="https://img.youtube.com/vi/C1jfgmH_abE/hqdefault.jpg"
                     alt="COFFEE SHOP ONLINE 紹介動画"
                     class="img-thumbnail thumb-img"
                     data-sub-title="COFFEE SHOP ONLINE の紹介動画です。"
                     data-content="Bootstrapのグリッドレイアウトを活用し、温かみと清潔感を両立したデザインを構築。動画ではページ遷移やUIの動きを確認できます。"
                     data-video="https://youtu.be/C1jfgmH_abE">

                <!-- メインイメージ -->
                <img src="{{ asset('images/coffee-bean.png') }}"
                     class="img-thumbnail thumb-img"
                     alt="COFFEE SHOP ONLINE メイン画像"
                     data-sub-title="トップページデザイン"
                     data-content="カフェの香りや雰囲気が感じられるように、配色・背景・余白を丁寧に調整しました。Bootstrapを使った静的サイトの完成形です。"
                     data-image="{{ asset('images/coffee-bean.png') }}">
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>

<script src="{{ asset('js/project-modal.js') }}"></script>

@push('styles')
<link rel="stylesheet" href="{{ asset('css/card.css') }}">
@endpush

<div class="modal fade" id="projectModal-1" tabindex="-1" aria-labelledby="projectModalLabel-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
      <div class="modal-content border-pink">
        <div class="modal-header d-flex justify-content-between align-items-center">
          <div class="like-container ms-4 justify-content-center w-100">
            <div class="row">
              <div class="col-md-11 p-0">
                <h6 class="fw-bold display-6">HopQuest - 旅行SNSアプリ</h6>
              </div>
              {{-- <div class="col-md-5">
                <button class="btn btn-link p-0 like-button-modal" disabled>
                  <i class="fa-regular fa-thumbs-up"></i>
                </button>
                <span class="like-count-modal m-0 p-0">42</span>
              </div> --}}
              <div class="col-md-1">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
            </div>
  
            <div class="row align-items-center mt-2">
              <div class="col-md-9">
                <p class="m-0">
                  Share your journey, connect with the world.<br>
                  旅の軌跡をクエストとして残し、仲間とつながる。旅行者とビジネスが共に広がる、新しい旅の形です。<br>
                  (Kredo IT留学にてチームで制作したウェブアプリケーションです。）<br>
                  ログインしていただくと詳細な機能がお試しいただけます。<br>
                  一般ユーザー：ID - bob@example.com, PASS - password<br>
                  企業ユーザー：ID - grace@example.com, PASS - password<br>
                  管理ユーザー：ID - admin@example.com, PASS - password<br>
                </p>
              </div>
  
              <div class="col-md-3 text-end">
                <a href="https://hop-quest-miura-3aa5c1fce796.herokuapp.com/home" target="_blank" class="btn btn-pink text-lgrey btn-sm">
                  <i class="fa-regular fa-rocket-launch"></i>
                  <span class="fs-small"> JUMP to WEBSITE</span>
                </a>
              </div>
            </div>
          </div>
        </div>
  
        <div class="modal-body">
          <div class="row">
            <!-- 左側: 説明 -->
            <div class="col-md-5">
              <div class="project-introduction" id="intro-hopquest">
                <h6>トップページ</h6>
                <p>新着スポットとクエストをカード形式で表示。</p>
              </div>
            </div>
  
            <!-- 右側: メイン画像＆サムネイル -->
            <div class="col-md-7">
              <div class="project-gallery" id="gallery-hopquest">
                <div class="main-image mb-2" id="main-hopquest">
                  <iframe 
                    src="https://www.youtube.com/embed/KqaOv0sHdXg" 
                    frameborder="0" 
                    allowfullscreen 
                    class="rounded shadow w-100" 
                    style="aspect-ratio: 16 / 9;">
                  </iframe>
                </div>
                
  
                <div class="thumbnail-images d-flex flex-wrap gap-2">
                  <!-- YouTube -->
                  <img src="{{ asset('images/HopQuest_video.png') }}"
                       class="img-thumbnail thumb-img thumb-video"
                       data-sub-title="担当箇所の動作や機能をまとめた動画です。"
                       data-content="チームプロジェクトの最終日に、講師陣や他チームに向けて英語でプレゼンテーションを行いました。
                       主な担当箇所は、一般ユーザーが旅行記や旅行の計画を作成できるページとその公開ページの作成、ビジネスユーザー（観光地やホテル、レストランなど）が観光スポットのモデルコースやおすすめメニュー・イベントなどを広報できるページの作成ページと公開ページの制作です。
                       特にユーザーの使いやすさを考えながら、JavaScriptを駆使して制作しました。"
                       data-video="https://youtu.be/KqaOv0sHdXg">
                  <!-- 通常画像 -->
                  <img src="{{ asset('images/HopQuest.png') }}"
                       class="img-thumbnail thumb-img"
                       data-sub-title="Laravel × MySQL × Google Maps API で構築した旅行SNSアプリ。"
                       data-content="投稿・フォロー・いいね・検索機能を備え、旅行者と店舗が情報を共有できるプラットフォームです。ユーザーは旅程やスポットを投稿し、他の旅人とつながることができます。ビジネスユーザーは店舗やイベントをPRすることも可能です。"
                       data-image="{{ asset('images/HopQuest.png') }}">

                       <img src="{{ asset('images/HopQuest-Logo.png') }}"
                       class="img-thumbnail thumb-img"
                       data-sub-title="ロゴ等のデザインも担当しました。"
                       data-content="AIを活用しつつも、チームの意見を取り入れながら必ず自分で手を加え、オリジナリティが出せるよう意識しました。ロゴ等の製作は初めてだったため何通りも試し、チームに相談しながらの作業でしたが、とても良い経験になりました。"
                       data-image="{{ asset('images/HopQuest-Logo.png') }}">

                       <img src="{{ asset('images/HopQuest-Figma.png') }}"
                        class="img-thumbnail thumb-img"
                        data-sub-title="デザインはFigmaを使用しました。"
                        data-content='Figmaデザインを見る → <a href="https://www.figma.com/design/IxLSzmgnit9vEHJcWgMDx1/Hop-Quest--%E3%82%B3%E3%83%94%E3%83%BC-?t=AnDuE20u8XxcAcqs-1" target="_blank" rel="noopener noreferrer">こちら</a>'
                        data-image="{{ asset('images/HopQuest-Figma.png') }}">

  
                  
                </div>
              </div>
            </div>
  
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('js/project-modal.js') }}"></script>
  
@foreach($projects as $project)
<div class="modal fade" id="projectModal-{{ $project->id }}" tabindex="-1" aria-labelledby="projectModalLabel-{{ $project->id }}" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content border-pink">
      <div class="modal-header d-flex justify-content-between align-items-center">
        <div class="like-container ms-4 justify-content-center w-100">
          <div class="row">
            <div class="col-md-6 p-0">
              <h6 class="fw-bold display-6">{{ $project->title }}</h6>
            </div>
            <div class="col-md-5">
              <button class="btn btn-link p-0 like-button-modal">
                <i class="fa-regular fa-thumbs-up"></i>
              </button>
              <span class="like-count-modal m-0 p-0">{{ $project->like_count }}</span>
            </div>
            <div class="col-md-1">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
          </div>

          <div class="row align-items-center">
            <!-- 左側: プロジェクトの紹介文 -->
            <div class="col-md-9">
              <p class="m-0">=> {!!nl2br(e($project->introduction )) !!}</p>
            </div>

            <!-- 右側: サイトへ飛ぶボタン -->
            <div class="col-md-3 text-end">
              @if($project->url)
                <a href="{{ $project->url }}" target="_blank" class="btn btn-pink text-lgrey btn-sm">
                  <i class="fa-regular fa-rocket-launch"></i>
                  <span class="fs-small"> JUMP to WEBSITE</span>
                </a>
              @endif
            </div>
          </div>
        </div>
      </div>

      <div class="modal-body">
        <div class="row">
          <!-- 左側: イントロ＆説明 -->
          <div class="col-md-5">
            <div class="project-introduction" id="project-intro-{{ $project->id }}">
              <h6>{{ $project->details->first()->sub_title ?? '' }}</h6>
              <p>{!!nl2br(e($project->details->first()->content ?? '' )) !!}</p>
            </div>
          </div>

          <!-- 右側: メイン画像 & サムネ群 -->
          <div class="col-md-7">
            <div class="project-gallery" id="gallery-{{ $project->id }}">
              <div class="main-image mb-2" id="main-img-container-{{ $project->id }}">
                @php 
                  $first = $project->details->first();
                @endphp

                @if($first)
                  @php
                    $isYoutube = $first->video_url && (str_contains($first->video_url, 'youtube.com') || str_contains($first->video_url, 'youtu.be'));
                    $videoId = null;
                    if ($isYoutube) {
                        if (preg_match('/youtu\.be\/([^?]+)/', $first->video_url, $matches)) {
                            $videoId = $matches[1];
                        } elseif (preg_match('/v=([^&]+)/', $first->video_url, $matches)) {
                            $videoId = $matches[1];
                        } elseif (preg_match('/embed\/([^?]+)/', $first->video_url,$matches)) {
                            $videoId = $matches[1];
                        }
                    }
                    // dd($isYoutube);
                  @endphp

                  @if($isYoutube && $videoId)
                    <iframe width="100%" height="400"
                            src="https://www.youtube.com/embed/{{ $videoId }}"
                            frameborder="0" allowfullscreen></iframe>
                  @elseif($first->image)
                    <img src="{{ asset('storage/' . $first->image) }}" class="img-fluid">
                  @endif
                @endif
              </div>

              <!-- サムネイル群 -->
              <div class="thumbnail-images d-flex flex-wrap gap-2">
                @foreach($project->details as $detail)
                  @php
                    $isYoutube = $detail->video_url && (str_contains($detail->video_url, 'youtube.com') || str_contains($detail->video_url, 'youtu.be'));
                    $thumbUrl = null;
                    $videoUrl = null;

                    if ($isYoutube) {
                        // URLからvideoIdを取得
                        if (preg_match('/youtu\.be\/([^?]+)/', $detail->video_url, $matches)) {
                            $videoId = $matches[1];
                        } elseif (preg_match('/v=([^&]+)/', $detail->video_url, $matches)) {
                            $videoId = $matches[1];
                        } elseif (preg_match('/embed\/([^?]+)/', $detail->video_url, $matches)) {
                            $videoId = $matches[1];
                        } else {
                            $videoId = null;
                        }

                        if ($videoId) {
                            $thumbUrl = "https://img.youtube.com/vi/{$videoId}/hqdefault.jpg";
                            $videoUrl = $detail->video_url;
                        }
                    } elseif ($detail->image) {
                        $thumbUrl = asset('storage/' . $detail->image);
                    }
                  @endphp

                  @if($thumbUrl)
                    <img src="{{ $thumbUrl }}"
                         class="img-thumbnail thumb-img"
                         data-project-id="{{ $project->id }}"
                         data-sub-title="{{ $detail->sub_title }}"
                         data-content="{{ $detail->content }}"
                         data-video-url="{{ $videoUrl ?? '' }}">
                  @endif
                @endforeach
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endforeach

<script src="{{ asset('js/project-modal.js') }}"></script>

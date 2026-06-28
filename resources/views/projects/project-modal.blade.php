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
              <button class="btn btn-link p-0 like-button-modal" disabled>
                <i class="fa-regular fa-thumbs-up"></i>
              </button>
              <span class="like-count-modal m-0 p-0">{{ $project->like_count }}</span>
            </div>
            <div class="col-md-1">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
          </div>

          <div class="row align-items-center mt-2">
            <div class="col-md-9">
              <p class="m-0">{!! nl2br(e($project->introduction)) !!}</p>
            </div>

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
        @php $first = $project->details->first(); @endphp
        <div class="row">
          <div class="col-md-5">
            <div class="project-introduction">
              <h6>{{ $first->sub_title ?? '' }}</h6>
              <p>{!! nl2br(e($first->content ?? '')) !!}</p>
            </div>
          </div>

          <div class="col-md-7">
            <div class="project-gallery">
              <div class="main-image mb-2">
                @php
                  $videoId = null;
                  if (!empty($first?->video_url)) {
                      if (preg_match('/v=([^&]+)/', $first->video_url, $m)) $videoId = $m[1];
                      elseif (preg_match('/youtu\.be\/([^?]+)/', $first->video_url, $m)) $videoId = $m[1];
                  }
                @endphp

                @if($videoId)
                  <iframe width="100%" height="400"
                          src="https://www.youtube.com/embed/{{ $videoId }}"
                          frameborder="0" allowfullscreen></iframe>
                @elseif(!empty($first?->image))
                  <img src="{{ asset($first->image) }}" class="img-fluid rounded">
                @endif
              </div>

              <div class="thumbnail-images d-flex flex-wrap gap-2">
                @foreach($project->details as $detail)
                  @php
                    $thumb = null;
                    if (!empty($detail->video_url) && preg_match('/v=([^&]+)/', $detail->video_url, $m)) {
                        $thumb = "https://img.youtube.com/vi/{$m[1]}/hqdefault.jpg";
                    } elseif (!empty($detail->image)) {
                        $thumb = asset($detail->image);
                    }
                  @endphp

                  @if($thumb)
                    <img src="{{ $thumb }}"
                         class="img-thumbnail thumb-img"
                         data-sub-title="{{ $detail->sub_title }}"
                         data-content="{{ $detail->content }}">
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

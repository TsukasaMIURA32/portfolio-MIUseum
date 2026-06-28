@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="display-4 fw-bold mb-4">{{ $project->title }}</h2>
    <p class="mb-5">{!! nl2br(e($project->introduction)) !!}</p>

    <div class="row g-4">
        @foreach($project->details->sortBy('order') as $detail)
            <div class="col-12">
                <div class="card h-100 shadow-sm">
                    <div class="row g-0">
                        @if($detail->image)
                            <div class="col-md-4">
                                <img src="{{ asset($detail->image) }}"
                                     class="img-fluid rounded-start"
                                     alt="{{ $detail->sub_title }}">
                            </div>
                        @endif
                        <div class="col-md-8">
                            <div class="card-body">
                                @if($detail->sub_title)
                                    <h5 class="card-title fw-bold">{{ $detail->sub_title }}</h5>
                                @endif
                                <p class="card-text">{!! nl2br(e($detail->content)) !!}</p>
                                @if($detail->video_url)
                                    <a href="{{ $detail->video_url }}" target="_blank">動画を見る</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

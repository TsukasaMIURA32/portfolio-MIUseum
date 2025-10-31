@php
$tags = [
    ['id' => 1, 'category_id' => 1, 'name' => 'HTML/CSS'],
    ['id' => 2, 'category_id' => 1, 'name' => 'JavaScript'],
    ['id' => 3, 'category_id' => 2, 'name' => 'PHP/Laravel'],
    ['id' => 4, 'category_id' => 2, 'name' => 'Java'],
    ['id' => 5, 'category_id' => 3, 'name' => 'MySQL'],
    ['id' => 6, 'category_id' => 4, 'name' => 'Figma'],
    ['id' => 7, 'category_id' => 5, 'name' => 'GitHub'],
    ['id' => 8, 'category_id' => 5, 'name' => 'Team Project'],
    ['id' => 9, 'category_id' => 6, 'name' => 'Bootstrap'],
];
  
$projects = [
    [
        'id' => 1,
        'title' => 'HopQuest - 旅行SNSアプリ',
        'main_image' => 'images/hopquest.png',
        'tags' => [
            ['name' => 'HTML/CSS'],
            ['name' => 'JavaScript'],
            ['name' => 'PHP/Laravel'],
            ['name' => 'MySQL'],
            ['name' => 'Figma'],
            ['name' => 'GitHub'],
            ['name' => 'Team Project']
        ],
        'youtube' => 'https://www.youtube.com/embed/XXXXXXXXXXX',
    ],
    [
        'id' => 2,
        'title' => 'JavaScript神経衰弱ゲーム',
        'main_image' => 'images/memorygame.png',
        'tags' => [
            ['name' => 'HTML/CSS'],
            ['name' => 'JavaScript'],
            ['name' => 'jQuery']
        ],
        'youtube' => 'https://www.youtube.com/embed/37EVdRZoI_Q',
    ],
    [
        'id' => 3,
        'title' => 'COFFEE SHOP ONLINE',
        'main_image' => 'images/coffee-bean.png',
        'tags' => [
            ['name' => 'HTML/CSS'],
            ['name' => 'Bootstrap'],
            ['name' => 'Webデザイン']
        ],
        'youtube' => 'https://www.youtube.com/embed/C1jfgmH_abE',
    ],
];
@endphp

@push('styles')
<link rel="stylesheet" href="{{ asset('css/card.css') }}">
@endpush

<div class="container-fluid">
    <div class="row">
        <!-- タグチップ -->
        <div id="tag-filter" class="mb-4 d-flex flex-wrap gap-2 px-2">
            <p class="small text-white mb-0 text-start">カテゴリーを選択するとプロジェクトを絞り込みます</p>
            <div class="d-flex flex-wrap gap-2 w-100">
                @foreach($tags as $tag)
                    <span class="tag-chip bg-white rounded-5 px-2 py-0" data-category-id="{{ $tag['category_id'] }}">
                        {{ $tag['name'] }}
                    </span>
                @endforeach
            </div>
        </div>

        <div class="container-fluid px-0">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach($projects as $project)
                    <div class="swiper-slide">
                        <div class="card-wrapper" data-project-id="{{ $project['id'] }}" 
                             data-bs-toggle="modal" 
                             data-bs-target="#projectModal-{{ $project['id'] }}">
                             
                            <div class="card h-100 custom-shadow">

                                <div class="card-tab d-flex align-items-center justify-content-center">
                                    <span class="fw-bold text-white"></span>
                                </div>

                                @if($project['main_image'])
                                <img src="{{ asset($project['main_image']) }}" class="img-fluid" alt="{{ $project['title'] }}">
                                @endif

                                <div class="row">
                                    <div class="col-10 d-flex flex-wrap align-items-center px-2">
                                        @foreach($project['tags'] as $tag)
                                            <span class="badge bg-lgrey text-black fs-xsmall ms-1">{{ $tag['name'] }}</span>
                                        @endforeach
                                    </div>
                                    {{-- <div class="col-2 p-0">
                                        <button class="btn btn-link p-0 like-button text-decoration-none text-bluw" disabled>
                                            <i class="fa-regular fa-thumbs-up fs-small"></i>
                                        </button>
                                        <span class="like-count text-black fs-small">{{ $project['like_count'] }}</span>
                                    </div> --}}
                                </div>

                                <div class="card-body d-flex flex-column justify-content-between py-0">
                                    <h6 class="card-title fw-bold m-0 fs-md-5 fs-lg-4">{{ $project['title'] }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/project.js') }}"></script>
{{-- 各モーダルをまとめて読み込み --}}
@include('projects.modals.hopquest-modal')
@include('projects.modals.coffeebean-modal')
@include('projects.modals.memorygame-modal')


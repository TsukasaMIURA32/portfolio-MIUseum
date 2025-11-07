@extends('layouts.app')

@section('title', "Tsukasa Miura's portfprio")

@push('styles')
<link rel="stylesheet" href="{{ asset('css/loading.css') }}">

@endpush


@section('content')
<div id="loading-screen" class="loading-screen">
    <img src="{{ asset('images/cloud.png') }}" alt="雲" class="anim-cloud">
    <img src="{{ asset('images/rocket.png') }}" alt="宇宙船" class="anim-spaceship">
    <img src="{{ asset('images/pink-star.png') }}" alt="星" class="anim-star pink">
    <img src="{{ asset('images/yellow-star.png') }}" alt="星" class="anim-star yellow">
    <img src="{{ asset('images/GO! EXPLORE!.svg') }}" alt="explore" class="anim-explore">
</div>
<!-- ヒーロー -->
        <div class="container-fluid">     
            <!-- 雪（ドット）コンテナ -->
            <div class="snow"></div>
            <!-- Section 1 -->
            <section id="section1" class="vh-100 d-flex align-items-center justify-content-center">
                
                   <!-- 光の帯エフェクト -->
                   <div class="scan-lines">
                        {{-- <div class="v-line line1"></div>
                        <div class="v-line line2"></div>
                        <div class="v-line line3"></div> --}}
                    
                        <div class="h-line line4"></div>
                        <div class="h-line line5"></div>
                        <div class="h-line line6"></div>
                    </div>
                
                 <!-- Custom line numbers for this section -->
                 <!-- Section 1 の数字部分 -->
                <div class="number text-lgrey text-end d-flex flex-column justify-content-between h-100 pt-5">
                    @for ($i = 1; $i <= 50; $i++)
                        <div>{{ $i }}</div>
                    @endfor
                </div>

                <div class="text-center w-100">
                
                    <div class="typing-wrapper">
                        <h1 class="typing">
                            <span class="text-white">
                              <span class="text-pink">let</span> name 
                              <span class="text-magenta">=</span> 
                              <span class="text-yellow">`MIUseum`</span>;
                            </span>
                          </h1>                          
                      </div>                      
                      
                <p class="text-green mt-2 hachi">/* About this site____<br>
                    三浦司のポートフォリオサイトです。<br>
                    これまでに制作した作品、身につけたスキルをまとめています。 <br>
                    ちょっとワクワクするような、世界観を大切にした制作を心がけています。<br>
                    詳しい経歴やスキルは、PROFILEからチェックしてください。*/
                    </p>
                    <img src="{{asset('images/down.png')}}" alt="" class="img-down" id="scroll-down">
                </div> 
            </section>
            
            <!-- Section 2 -->
            <section id="section2" class="d-flex align-items-center justify-content-center">
                {{-- <div class="text-center"> --}}
                    @include('profile')
                {{-- </div> --}}
            </section>
            
            <!-- Section 3 -->
            <section id="section3" class="my-5 py-lg-5 d-flex align-items-center justify-content-center">
                {{-- <div class="text-center"> --}}
                    <!-- Projects -->
                    @include('projects-partial')
                {{-- </div> --}}
            </section>
            
            <!-- Section 4 -->
            <section id="section4" class="my-5 py-lg-5 d-flex justify-content-center text-center">
                @include('contact')
            </section>
        </div>
    
    <script src="{{ asset('js/loading.js') }}"></script>
@endsection
    



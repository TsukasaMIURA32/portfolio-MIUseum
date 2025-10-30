@extends('layouts.app')
@section('title', "Profile Journey | MIUseum")

@push('styles')
<link rel="stylesheet" href="{{ asset('css/profiledetails.css') }}">
@endpush

@section('content')
<div class="universe-container py-5 text-center">
    <div class="snow"></div>
  <h1 class="page-title mb-3">My Cosmic Journey 🚀</h1>

  <div class="space-timeline">
    <div class="timeline-line"></div>

    <!-- 例：2018 カナダ留学 -->
    <div class="timeline-item left" data-aos="fade-right">
      <div class="planet-card career-card">
        <div class="planet-icon planet-pink"></div>
        <div class="card-content">
          <h3>2018 – Canada 留学 🌎</h3>
          <p>トロントでビザコンサルアシスタントとして勤務。<br>
          異文化の中で初めて英語で働く経験を得る。<br>
          ✈️ アメリカ横断を夢見たが、断念してカナダへ！</p>
        </div>
      </div>
    </div>

    <!-- 例：2019 エンタメ業界 -->
    <div class="timeline-item right" data-aos="fade-left">
      <div class="planet-card career-card">
        <div class="planet-icon planet-yellow"></div>
        <div class="card-content">
          <h3>2019–2020 – エンタメ制作 🎭</h3>
          <p>舞台作品の制作進行・SNS運用・PR担当。<br>
          チームワークとスケジュール管理を学ぶ。</p>
        </div>
      </div>
    </div>

    <!-- 例：2024–2025 IT転身 -->
    <div class="timeline-item left" data-aos="fade-right">
      <div class="planet-card private-card">
        <div class="planet-icon planet-blue"></div>
        <div class="card-content">
          <h3>2024–2025 – IT留学 & 再挑戦 💻</h3>
          <p>PHP/Laravel・Java・SQLなどを体系的に学習。<br>
          チーム開発でHerokuデプロイや英語開発を経験。<br>
          「Skill Galaxy」が誕生🌌</p>
        </div>
      </div>
    </div>
  </div>

  <div class="text-center mt-5">
    <a href="{{ url('/') }}" class="btn btn-outline-light rounded-pill px-4">
      ← Back to MIUseum
    </a>
  </div>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script>
@endsection

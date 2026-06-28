@extends('layouts.app')
@section('title', "Skill Galaxy | MIUseum")

@push('styles')
<link rel="stylesheet" href="{{ secure_asset('css/skills.css') }}">
@endpush

@section('content')
<div class="container-fluid p-0">
  <div class="universe-container text-center pt-5">
    <div class="snow"></div>

    <h1 class="page-title mb-3">Skill Galaxy 🌌</h1>
    <p class="text-lgrey mb-5">レーダーチャートにカーソルを合わせると、スキルの詳細が表示されます。</p>

    <!-- チャート＋パネル（横並び対応） -->
    <div class="chart-wrapper d-flex flex-column flex-md-row align-items-center justify-content-center gap-4">
      <div class="chart-area">
        <canvas id="skillRadar"></canvas>
      </div>

      <div id="skill-details" class="skill-panel">
        <p>各スキルの＊にカーソルを合わせて詳細をチェック 🚀</p>
      </div>
    </div>

    <div class="text-center mt-4">
      <a href="{{ url('/') }}" class="btn btn-outline-light rounded-pill px-4">
        ← Back to MIUseum
      </a>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
<script src="{{ secure_asset('js/skills.js') }}"></script>
@endsection


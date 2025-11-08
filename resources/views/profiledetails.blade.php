@extends('layouts.app')
@section('title', "Profile Journey | MIUseum")

@push('styles')
<link rel="stylesheet" href="{{ asset('css/profiledetails.css') }}">
@endpush

@section('content')
<div class="universe-container py-5 text-center">
  <div class="snow"></div>

  <h1 class="page-title mb-3 text-lgrey">My Cosmic Journey 🚀</h1>
  <p class="text-lgrey mb-5">― ちょっと笑えて、ちょっと懐かしい、私の軌跡 ―</p>

  <div class="space-timeline">
    <div class="timeline-line"></div>

    <!-- 1990 -->
    <div class="timeline-item" data-aos="fade-up">
      <div class="planet-card">
        <div class="planet-icon planet-yellow">
          <img src="{{ asset('images/1990_child.jpg') }}" alt="baby" class="img-fluid rounded-circle">
        </div>
        <h3>1990年10月　山梨県富士河口湖町で誕生</h3>
        <p>
          小さい頃に父親のタバコを食べて救急車で運ばれる。🚑<br>
          今となっては笑える、時代を感じるエピソードである。
        </p>
      </div>
    </div>

    <!-- 1995〜2000 -->
    <div class="timeline-item" data-aos="fade-up">
      <div class="planet-card">
        <div class="planet-icon planet-blue">
          <img src="{{ asset('images/1995_yokohama.jpg') }}" alt="yokohama" class="img-fluid rounded-circle">
        </div>
        <h3>1995〜2000年　父親の転勤で横浜市在住</h3>
        <p>
          横浜市民なら誰でも歌えるという横浜市歌をいまだに歌える。🎵<br>
          「わが日の本は島国よ〜♪」が今でも頭に浮かぶ。
        </p>
      </div>
    </div>

    <!-- 2000〜2006 -->
    <div class="timeline-item" data-aos="fade-up">
      <div class="planet-card">
        <div class="planet-icon planet-pink">
          <img src="{{ asset('images/2000_village.jpg') }}" alt="village" class="img-fluid rounded-circle">
        </div>
        <h3>2000〜2006年　地元に戻る</h3>
        <p>
          あまりにも小さな村で小中学校時代を過ごす。👧<br>
          同級生はわずか15人。みんな家族みたいだった。<br>
          小学校時代の習い事はピアノとそろばん。中学ではバレーと太鼓に勤しむ。🥁
        </p>
      </div>
    </div>

    <!-- 2006〜2009 -->
    <div class="timeline-item" data-aos="fade-up">
      <div class="planet-card">
        <div class="planet-icon planet-yellow d-flex justify-content-center align-items-center">
          <i class="fa-solid fa-water fs-1 text-white"></i>
        </div>
        <h3>2006〜2009年　高校生</h3>
        <p>
          部活はボート部。河口湖の上を優雅に漂う…ように見えるが実際は地獄のトレーニング。💪<br>
          ウェイトトレーニングと成長期で過去最高体重を記録。
        </p>
      </div>
    </div>

    <!-- 2009〜2013 -->
    <div class="timeline-item" data-aos="fade-up">
      <div class="planet-card">
        <div class="planet-icon planet-blue">
          <img src="{{ asset('images/2009_university.jpg') }}" alt="university" class="img-fluid rounded-circle">
        </div>
        <h3>2009〜2013年　東京の西の方で大学生活</h3>
        <p>
          英文学科。📚<br>
          毎日のようにユニクロでアルバイトし、稼いだお金はほぼ食べ物に消える。🍙
        </p>
      </div>
    </div>

    <!-- 2013〜2015 -->
    <div class="timeline-item" data-aos="fade-up">
      <div class="planet-card">
        <div class="planet-icon planet-pink d-flex justify-content-center align-items-center">
          <i class="fa-solid fa-chalkboard-user fs-1 text-white"></i>
        </div>
        <h3>2013〜2015年　大学助手として勤務</h3>
        <p>
          出身大学の出身学科で助手。🎓<br>
          学生のサポートが楽しくて、教育の面白さに触れる。
        </p>
      </div>
    </div>

    <!-- 2015〜2017 -->
    <div class="timeline-item" data-aos="fade-up">
      <div class="planet-card">
        <div class="planet-icon planet-yellow">
          <img src="{{ asset('images/2015_office.jpg') }}" alt="office" class="img-fluid rounded-circle">
        </div>
        <h3>2015〜2017年　別大学で大学事務</h3>
        <p>
          あまりにも女性だらけの職場にビビる。😅<br>
          でも人との関わりの多さにやりがいを感じる。
        </p>
      </div>
    </div>

    <!-- 2017 -->
    <div class="timeline-item" data-aos="fade-up">
      <div class="planet-card">
        <div class="planet-icon planet-blue">
          <img src="{{ asset('images/2017_cebustudy.jpg') }}" alt="cebu" class="img-fluid rounded-circle">
        </div>
        <h3>2017年　セブ留学へ</h3>
        <p>
          ある程度お金が貯まったので、昔からの夢だった海外留学に挑戦。🌴<br>
          最初は4ヶ月間のセブ留学。セブ好きがここから始まる。
        </p>
      </div>
    </div>

    <!-- 2018〜2019 -->
    <div class="timeline-item" data-aos="fade-up">
      <div class="planet-card">
        <div class="planet-icon planet-pink">
          <img src="{{ asset('images/2018_canada.jpg') }}" alt="canada" class="img-fluid rounded-circle">
        </div>
        <h3>2018〜2019年　カナダワーホリ</h3>
        <p>
          英語力はまだまだだったが、現地の留学エージェントで勤務。🍁<br>
          韓国人とロシア人の先輩の発音に苦戦しながら学ぶ。<br>
          ビザ切れを機に帰国を決意し、アメリカ横断の旅へ。🇺🇸
        </p>
      </div>
    </div>

    <!-- 2019〜2020 -->
    <div class="timeline-item" data-aos="fade-up">
      <div class="planet-card">
        <div class="planet-icon planet-yellow">
          <img src="{{ asset('images/2019_stage.jpg') }}" alt="stage" class="img-fluid rounded-circle">
        </div>
        <h3>2019〜2020年　舞台制作の仕事に挑戦</h3>
        <p>
          完全未経験からエンタメ業界へ。🎭<br>
          激務ながらも、チームと創る舞台が最高に楽しい一年！
        </p>
      </div>
    </div>

    <!-- 2020〜2022 -->
    <div class="timeline-item" data-aos="fade-up">
      <div class="planet-card">
        <div class="planet-icon planet-blue">
          <img src="{{ asset('images/2020_designstudy.png') }}" alt="design" class="img-fluid rounded-circle">
        </div>
        <h3>2020〜2022年　デザインとHP制作の勉強</h3>
        <p>
          コロナで舞台制作が終了。💭<br>
          いい機会なのでデザインを学ぶ。<br>
          Illustrator・Photoshop・HP制作の基礎を習得。
        </p>
      </div>
    </div>

    <!-- 2022〜2024 -->
    <div class="timeline-item" data-aos="fade-up">
      <div class="planet-card">
        <div class="planet-icon planet-pink d-flex justify-content-center align-items-center">
          <i class="fa-solid fa-code fs-1 text-white"></i>
        </div>
        <h3>2022〜2024年　Web制作に夢中になる</h3>
        <p>
          HTML / CSS / JavaScript を学習し、プログラミングに目覚める。💻<br>
          TOEICで900点を超え、ワーホリで鍛えたリスニング力を再確認。
        </p>
      </div>
    </div>

    <!-- 2024〜2025 -->
    <div class="timeline-item" data-aos="fade-up">
      <div class="planet-card">
        <div class="planet-icon planet-yellow">
          <img src="{{ asset('images/2024_kredo.jpg') }}" alt="kredo" class="img-fluid rounded-circle">
        </div>
        <h3>2024〜2025年　Kredo IT留学 in セブ</h3>
        <p>
          再び大好きなセブへ。🏝️<br>
          PHP/Laravel・MySQL・Javaなどを本格的に学ぶ。<br>
          英語でコードレビューされる毎日に悪戦苦闘しつつも、確かな成長を実感。
        </p>
      </div>
    </div>

    <!-- 2025 -->
    <div class="timeline-item" data-aos="fade-up">
      <div class="planet-card">
        <div class="planet-icon planet-blue d-flex justify-content-center align-items-center">
          <i class="fa-solid fa-mug-hot fs-1 text-white"></i>
        </div>
        <h3>2025年　Javaプログラミングコース受講</h3>
        <p>
          未経験歓迎求人に応募して気づいた。🧠<br>
          「どこも最初にJava研修あるじゃん！」<br>
          どうせやるなら先に学んでおこうと思い参加。<br>
          Javaの難しさに、毎日ちょっと泣きそうになる。
        </p>
      </div>
    </div>

    <!-- 最後のまとめカード -->
    <div class="timeline-item" data-aos="zoom-in">
      <div class="planet-card final-card">
        <div class="planet-icon planet-purple d-flex justify-content-center align-items-center">
          <i class="fa-solid fa-rocket fs-1 text-white"></i>
        </div>
        <h3>これからの航路 🚀</h3>
        <p>
          これまでの経験を全部つなげて、<br>
          「人と世界をつなぐ」エンジニアとして歩んでいきたい。<br>
          コードで誰かの“挑戦”を後押しできるように。✨
        </p>
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

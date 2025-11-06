@push('styles')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">

@endpush

{{-- <div class="cotainer m-0 p-0"> --}}
    <div class="row g-0 align-items-center justify-content-center mx-0">
        <div class="col-lg-5 order-2 order-lg-1 px-0 mx-lg-auto">
            <div class="terminal-window mx-0 w-100" data-link="/skilldetails">
                <div class="terminal-header">
                    <span class="terminal-dot dot-red"></span>
                    <span class="terminal-dot dot-yellow"></span>
                    <span class="terminal-dot dot-green"></span>
                    <span class="ms-2 text-lgrey small">Profile.pro</span>
                </div>
                <div class="code-content text-start mx-5">
                    <div class="mb-2">
                        <span class="text-lgrey">class </span><span class="text-purple">Profile</span> {
                    </div>
                    <div class="ms-3 mb-1 text-magenta">
                        <span class="text-purple">String </span><span class="text-pink">name</span> = <span class="text-lgrey">"Tsukasa Miura";</span>
                    </div>
                    <div class="ms-3 mb-1 text-magenta">
                        <span class="text-purple">String </span><span class="text-pink">role</span> = <span class="text-lgrey">"Web Engineer";</span>
                    </div>
                    <div class="ms-3 mb-2 text-magenta">
                        <span class="text-purple">String </span><span class="text-pink">focus</span> = <span class="text-lgrey">"Front-end & Back-end";</span>
                    </div>
                    <div>
                        <span class="text-lgrey">void introduce() {<BR>
                            <span class="ms-3"> System.out.println( <span class="text-green">"Diving into the ocean of code!!!"</span>);<BR>
                        }</span>
                    </div>
                    <div>};</div>
                </div>
            </div>

            <div class="terminal-window mt-4 mx-0 w-100" data-link="/skilldetails">
                <div class="terminal-header">
                    <span class="terminal-dot dot-red"></span>
                    <span class="terminal-dot dot-yellow"></span>
                    <span class="terminal-dot dot-green"></span>
                    <span class="ms-2 text-lgrey small">Skill.set</span>
                    <p class="text-end text-lgrey p-0"> =>> View More</p>
                </div>
                <div class="code-content pt-0 pb-2 mx-3">
                    <div class="skill my-0">
                        <div class="label mb-0 text-start text-lgrey">Front-end</div>
                        <div class="bar"><div class="progress front"></div></div>
                    </div>
                    
                    <div class="skill my-0">
                    <div class="label mb-0 text-start text-lgrey">Back-end</div>
                    <div class="bar"><div class="progress back"></div></div>
                    </div>
                
                    <div class="skill my-0">
                    <div class="label mb-0 text-start text-lgrey">Design</div>
                    <div class="bar"><div class="progress design"></div></div>
                    </div>
                
                    <div class="skill my-0">
                    <div class="label mb-0 text-start text-lgrey">Office/Management</div>
                    <div class="bar"><div class="progress office"></div></div>
                    </div>
                
                    <div class="skill my-0">
                    <div class="label mb-0 text-start text-lgrey">Communication (English)</div>
                    <div class="bar"><div class="progress english"></div></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 order-1 order-lg-2 mx-lg-auto px-0">
            <div class="terminal-window text-cente w-100 mx-0" data-link="/profiledetails">
                <div class="terminal-header">
                    <span class="terminal-dot dot-red"></span>
                    <span class="terminal-dot dot-yellow"></span>
                    <span class="terminal-dot dot-green"></span>
                    <span class="ms-2 text-lgrey small"></span>
                </div>
                <div class="code-content m-5">
                    <div class="row text-center align-items-center">
                        <div class="col">
                            <h3 class="mb-3 text-lgrey">みうら</h3>
                            <h3 class="mb-3 text-lgrey ms-5 ps-2">つかさ</h3>
                        </div>
                        <div class="col">
                            <img src="{{asset('images/profile.png')}}" alt="Tsukasa Miura" class="profile-image mb-4 rounded-circle">
                        </div>
                    </div>
                    
                    <div class="text-start text-lgrey hachi">
                        山梨県富士河口湖町出身。
                        大学事務、舞台エンタメ、カナダワーホリ、フィリピンIT留学など、いろいろなことにチャレンジしてしてきました。<br>
                        近年はエンジニアになりたい！とフロントエンドからバックエンドまで幅広く学びました。<br>
                        現在はJava学習中！
                        休日はマイクラプログラミング教室で小学生にプログラミングを教えています<i class="fa-whiteboard fa-semibold fa-face-smile"></i>
                        
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <strong>note:</strong> 
                                <a href="" class="text-blue">https://note.com/tsukasa_mi302</a>
                            </li>
                            <li>
                                <strong>Github:</strong> 
                                <a href="https://github.com/TsukasaMIURA32" class="text-blue">https://github.com/TsukasaMIURA32</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}

<script src="{{ asset('js/profile.js') }}"></script>
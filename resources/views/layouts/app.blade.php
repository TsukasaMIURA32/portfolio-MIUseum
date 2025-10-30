<!-- resources/views/top.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Tsukasa Miura</title>
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @stack('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <!-- ナビバー -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-0">
        <div class="container-fluid px-3 mx-0 bg-navbar ">
            <a class="navbar-brand fw-bold text-lgrey" href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="logo" class="img-md">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav" aria-controls="navbarNav" 
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon text-white"></span>
            </button>
            <div class="collapse navbar-collapse align-items-center" id="navbarNav">
                <ul class="navbar-nav fs-4 pe-0">
                    <li class="nav-item px-3"><a class="nav-link text-lgrey" href="#profile"><i class="fa-solid fa-address-card me-2 text-pink"></i>PROFILE</a></li>
                    <li class="nav-item px-3"><a class="nav-link text-lgrey" href="#works"><i class="fa-solid fa-file-zipper me-2 text-blue"></i>WORKS</a></li>
                    <li class="nav-item px-3"><a class="nav-link text-lgrey" href="#blog"><i class="fa-solid fa-book me-2 text-purple"></i>note</a></li>
                    <li class="nav-item px-3 text-green"><a class="nav-link text-lgrey" href="#contact"><i class="fa-solid fa-envelope me-2 text-yellow"></i>CONTACT</a></li>
                </ul>
                <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                    {{-- Search bar here --}}
                    <ul class="navbar-nav mx-auto me-0">
                        <form action=""
                            class="nav-search d-flex align-items-center justify-content-between ms-md-5">
                            <input type="search" name="search" placeholder="Search..."
                                class="form-control-sm  px-2 py-0">
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
            <!-- フッター -->
                <footer class="py-3 text-center bg-navy text-lgrey footer-bg">
                    <div class="container">
                        <p class="mb-0">&copy; 2025 Tsukasa Miura. All Rights Reserved.</p>
                    </div>
                </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

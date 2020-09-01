<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>SMANEV</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
			CSS
            ============================================= -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/siswa/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/siswa/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/siswa/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/siswa/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/siswa/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/siswa/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/siswa/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('public/assets/siswa/css/main.css') }}">
</head>
<!-- NAVBAR -->
@include('layouts.siswa.navbar')

<!--  KONTEN -->
<!-- start banner Area -->
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    @yield('judul')
                </h1>
                <p class="text-white link-nav"><a href="/berandasiswa/">Home </a> <span><i class="fas fa-arrow-right"></span></i><a href="courses.html"> @yield('judul')</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->
@yield('konten')

<!-- AKHIR KONTEN -->

<!-- FOOTER -->
@include('layouts.siswa.footer')
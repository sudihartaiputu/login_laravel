<!DOCTYPE html>
<html lang="en">

<head>
    <title>SMANEV - SMAN 11 Luwu Utara</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset('public/favicon.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/assets/welcome/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/welcome/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/welcome/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/welcome/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/welcome/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/welcome/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/welcome/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/welcome/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/welcome/css/jquery.timepicker.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/welcome/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/welcome/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/welcome/css/mystyle.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html"><span>SMANEV</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Beranda</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">Profil</a></li>
                    <li class="nav-item"><a href="games.html" class="nav-link">Sejarah</a></li>
                    <li class="nav-item"><a href="{{route('post.list')}}" class="nav-link">Berita</a></li>
                    <li class="nav-item"><a href="{{route('kontak')}}" class="nav-link">Hubungi kami</a></li>
                    <li class="nav-item cta"><a href="{{route('login')}}" class="nav-link">Login</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
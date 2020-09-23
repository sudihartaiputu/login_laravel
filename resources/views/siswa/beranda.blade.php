<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('assets/siswa/img/favicon.png')}}">
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
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/siswa/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/siswa/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/siswa/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/siswa/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/siswa/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/siswa/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/siswa/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/siswa/css/main.css') }}">
</head>

<body>
    @include('layouts.siswa.navbar')

    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-between">
                <div class="banner-content col-lg-9 col-md-12">
                    <h1 class="text-uppercase">
                        Malangke Gemilang
                    </h1>
                    <p class="pt-10 pb-10">
                        Ivonasi dalam Teknologi demi SMA Negeri 11 Luwu Utara yang lebih gemilang
                    </p>

                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start popular-course Area -->
    <section class="popular-course-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Materi Terbaru</h1>
                        <p>Semangat belajar demi Malangke Gemilang</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-popular-carusel">
                    @foreach ($materi as $materibaru)
                    <div class="single-popular-carusel">
                        <a href="{{ route ('materi.isi', $materibaru->slug) }}" id="postVisitCount">
                            <div class="thumb-wrap relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="{{$materibaru->gambar}}" style="width:270px;height:200px;" alt="">
                                </div>
                                <div class="meta d-flex justify-content-between">
                                    <p><span class="lnr lnr-users"></span> {{$materibaru->guru->name}}
                                        <h4>Visit</h4>
                                </div>
                            </div>
                            <div class="details mt-2">
                                Guru : {{$materibaru->guru->name}} <br>
                                Mata Pelajaran : {{$materibaru->mapel->nama}}
                                <h5>
                                    {{$materibaru->judul}}
                                </h5>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End popular-course Area -->
    <!-- Start cta-two Area -->
    <section class="cta-two-area">
        <div class="container">
            <div class="row">
            </div>
        </div>
    </section>
    <!-- End cta-two Area -->

    <!-- Start upcoming-event Area -->
    <section class="upcoming-event-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Berita Terbaru</h1>
                        <p>Menambah wawasan dengan membaca berita yang bermanfaat</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-upcoming-event-carusel">
                    @foreach($posts as $post)
                    <div class="single-carusel row align-items-center">
                        <div class="col-12 col-md-6 thumb">
                            <img class="img-fluid" src="{{$post->gambar}}" style="width:270px;height:200px;">
                        </div>
                        <div class="detials col-12 col-md-6">
                            <p>{{$post->created_at->diffForHumans ()}}</p> <br>
                            <h5>{{$post->kategori->nama}}</h5>
                            <a href="#">
                                <h4>{{$post->judul}}</h4>
                            </a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- End upcoming-event Area -->


    <!-- Start Video Youtube Area -->
    <section class="blog-area section-gap" id="blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Video Youtube Terbaru</h1>
                        <p>Dukung Youtuber sekolah dan jangan lupa Subscribe, Like dan Share</p>
                    </div>
                </div>
            </div>
            <div class="row align-center">
                <div class="col-lg-4 single-blog">
                    <h5>Pensi, Seni Perkusi</h5>

                    <iframe width="360" height="215" src="https://www.youtube.com/embed/evQZo6ZuNKY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>
                <div class="col-lg-4 single-blog">
                    <h5>Pensi, Ekstrakurikuler Tari</h5>

                    <iframe width="360" height="215" src="https://www.youtube.com/embed/ufW-RhnCkwo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>
                <div class="col-lg-4 single-blog">
                    <h5>Pensi, Lagu Solo</h5>

                    <iframe width="360" height="215" src="https://www.youtube.com/embed/_fyjcGX9wjs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                </div>

            </div>
        </div>
    </section>
    <!-- End blog Area -->




    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single-footer-widget">
                        <h4>Hubungi Kami</h4>
                        <p>UPT SMA NEGERI 11 LUWU UTARA</p>
                        <p><i class="fas fa-fw fa-map-marker-alt ml-3"></i> Jalan Daeng Mangatta Desa Tolada</p>
                        <p><i class="fas fa-fw fa-envelope ml-3"></i> sman1malangke@gmail.com</p>
                        <p><i class="fab fa-fw fa-whatsapp ml-3"></i></i> 085242880901</p>

                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-auto mr-auto">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script>| This template is made with <i class="fas fa-heart"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
                <div class="col-auto mr-3">
                    <a href="https://www.facebook.com/groups/285398351816578"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.youtube.com/channel/UCm4V-N2KoVg9MOtTG3oLnsw?view_as=subscriber"><i class="fab fa-youtube"></i></a></div>
            </div>

    </footer>
    <!-- End footer Area -->



    <script src="{{asset('assets/siswa/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{asset('assets/siswa/js/vendor/bootstrap.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{asset('assets/siswa/js/easing.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/hoverIntent.js')}}"></script>
    <script src="{{asset('assets/siswa/js/superfish.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/jquery.tabs.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/siswa/js/mail-script.js')}}"></script>
    <script src="{{asset('assets/siswa/js/main.js')}}"></script>
</body>

</html>
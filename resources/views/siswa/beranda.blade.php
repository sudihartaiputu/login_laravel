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

<body>
    <header id="header" id="home">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                        <ul>
                            <li><a href="https://www.facebook.com/groups/285398351816578"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCm4V-N2KoVg9MOtTG3oLnsw?view_as=subscriber"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                        <a href=""><span class="fas fa-user"></span> <span class="text">{{ Auth::user()->name }}</span></a>
                        <a href=""><span class="fas fa-envelope"></span> <span class="text">{{ Auth::user()->email }}</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="{{route('logout')}}"> <i class="fas fa-sign-out-alt"> Keluar</i></a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->

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

    <!-- Start feature Area -->
    <section class="feature-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>Kelas X</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                Kumpulan Materi untuk siswa Kelas X
                            </p>
                            <a href="">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>Kelas XI</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                Kumpulan Materi untuk siswa Kelas X
                            </p>
                            <a href="">Lihat</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>Kelas XII</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                                Kumpulan Materi untuk siswa Kelas X
                            </p>
                            <a href="">Lihat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature Area -->

    <!-- Start popular-course Area -->
    <section class="popular-course-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Kumpulan materi</h1>
                        <p>Semangat belajar demi Malangke Gemilang</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($materi as $materibaru)
                <div class="active-popular-carusel">
                    <div class="single-popular-carusel">
                        <a href="#">
                            <div class="thumb-wrap relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="{{$materibaru->gambar}}" alt="">
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
            </div>
            @endforeach
        </div>
    </section>
    <!-- End popular-course Area -->


    <!-- Start search-course Area -->
    <section class="search-course-area relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-md-6 search-course-left">
                    <h1 class="text-white">
                        Get reduced fee <br>
                        during this Summer!
                    </h1>
                    <p>
                        inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach.
                    </p>
                    <div class="row details-content">
                        <div class="col single-detials">
                            <span class="lnr lnr-graduation-hat"></span>
                            <a href="#">
                                <h4>Expert Instructors</h4>
                            </a>
                            <p>
                                Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                            </p>
                        </div>
                        <div class="col single-detials">
                            <span class="lnr lnr-license"></span>
                            <a href="#">
                                <h4>Certification</h4>
                            </a>
                            <p>
                                Usage of the Internet is becoming more common due to rapid advancement of technology and power.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 search-course-right section-gap">
                    <form class="form-wrap" action="#">
                        <h4 class="text-white pb-20 text-center mb-30">Search for Available Course</h4>
                        <input type="text" class="form-control" name="name" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'">
                        <input type="phone" class="form-control" name="phone" placeholder="Your Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Phone Number'">
                        <input type="email" class="form-control" name="email" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'">
                        <div class="form-select" id="service-select">
                            <select>
                                <option datd-display="">Choose Course</option>
                                <option value="1">Course One</option>
                                <option value="2">Course Two</option>
                                <option value="3">Course Three</option>
                                <option value="4">Course Four</option>
                            </select>
                        </div>
                        <button class="primary-btn text-uppercase">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End search-course Area -->


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

    <!-- Start review Area -->
    <section class="review-area section-gap relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row">
                <div class="active-review-carusel">
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <a href="#">
                                <h4>Fannie Rowe</h4>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                    </div>







                </div>
            </div>
        </div>
    </section>
    <!-- End review Area -->

    <!-- Start cta-one Area -->
    <section class="cta-one-area relative section-gap">
        <div class="container">
            <div class="overlay overlay-bg"></div>
            <div class="row justify-content-center">
                <div class="wrap">
                    <h1 class="text-white">Become an instructor</h1>
                    <p>
                        There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station whether that is on the deck.
                    </p>
                    <a class="primary-btn wh" href="#">Apply for the post</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End cta-one Area -->

    <!-- Start blog Area -->
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


    <!-- Start cta-two Area -->
    <section class="cta-two-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 cta-left">
                    <h1>Not Yet Satisfied with our Trend?</h1>
                </div>
                <div class="col-lg-4 cta-right">
                    <a class="primary-btn wh" href="#">view our blog</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End cta-two Area -->

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

    <script src="{{asset('public/assets/siswa/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('public/assets/siswa/js/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{asset('public/assets/siswa/js/vendor/bootstrap.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{asset('public/assets/siswa/js/easing.min.js')}}"></script>
    <script src="{{asset('public/assets/siswa/js/hoverIntent.js')}}"></script>
    <script src="{{asset('public/assets/siswa/js/superfish.min.js')}}"></script>
    <script src="{{asset('public/assets/siswa/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('public/assets/siswa/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('public/assets/siswa/js/jquery.tabs.min.js')}}"></script>
    <script src="{{asset('public/assets/siswa/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('public/assets/siswa/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/assets/siswa/js/mail-script.js')}}"></script>
    <script src="{{asset('public/assets/siswa/js/main.js')}}"></script>
</body>

</html>
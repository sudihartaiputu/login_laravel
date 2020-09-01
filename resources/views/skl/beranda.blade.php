<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Kelulusan</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('public/assets/skl/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/skl/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/skl/css/themify-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/skl/css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/skl/css/owl.carousel.css')}}" />
    <link rel="stylesheet" href="{{asset('public/assets/skl/css/style.css')}}" />


</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section clearfix">
        <div class="container-fluid">
            <a href="index.html" class="site-logo">
                <img src="{{asset('/public/assets/skl/img/logo.png')}}" alt="">
            </a>
            <div class="responsive-bar"><i class="fa fa-bars"></i></div>
            <a href="" class="user"><i class="fa fa-user"></i></a>
            <a href="{{route('logout')}}" class="site-btn">Logout</a>
        </div>
    </header>
    <!-- Header section end -->
    <?php
    $akhir  = new DateTime($setting['tgl_pengumuman']); //Waktu awal
    $awal = new DateTime(); // Waktu sekarang atau akhir
    $diff  = $awal->diff($akhir);

    ?>

    <!-- Hero section -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 hero-text">
                    <h2>Invest in <span>Bitcoin</span> <br>Bitcoin Trading</h2>
                    <h4>Use modern progressive technologies of Bitcoin to earn money</h4>
                    <form class="hero-subscribe-from">
                        <input type="text" placeholder="Enter your email">
                        <button class="site-btn sb-gradients">Get Started</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div id="formamplop">
                        <div class="animated tada  p-l-45 p-r-45 p-t-50 p-b-10 p-lr-15-sm">
                            <div class="loader"><img src="assets/back/img/loading.gif"></div>
                            <?php if ($akhir <= $awal) { ?>
                                <a id="amploptutup" class="animated tada hvr-pulse" href="#">
                                    <img src="assets/back/img/amploptutup.png" alt="LOGO" style="width:100%;max-width:400px;" />
                                </a>
                                <a id="amplopbuka" class="animated tada p-b-10" href="#">
                                    <img src="assets/back/img/amplopbuka.png" alt="LOGO" style="width:100%;max-width:400px;" />
                                </a>
                            <?php } else { ?>

                                <div class="cd100"></div>
                            <?php } ?>
                        </div>
                        <span id="keterangan" class="keter  animated tada ">
                            <?php if ($siswaskl['keterangan'] == 1) {
                                echo "LULUS";
                            } elseif ($siswaskl['keterangan'] == 2) {
                                echo "PANGGILAN";
                            } else {
                                echo "TIDAK LULUS";
                            }
                            ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->

    <!--====== Javascripts & Jquery ======-->
    <script src="{{asset('public/assets/skl/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('public/assets/skl/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/assets/skl/js/main.js')}}"></script>
</body>

</html>
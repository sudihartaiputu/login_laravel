<body>
    <header id="header" id="home">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                        <ul>
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href=""><i class="fab fa-youtube"></i></a></li>
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
                        <li><a href="/berandasiswa">Home</a></li>
                        <li><a href="/siswa/materi">Materi</a></li>
                        <li><a href="/siswa/tugas">Tugas</a></li>
                        <li><a href="/siswa/ujian">Ujian</a></li>
                        <li><a href="/siswa/nilai">Nilai</a></li>
                        <li><a href="/siswa/galeri">Galeri</a></li>
                        <li><a href="/siswa/tutorial">Tutorial</a></li>
                        <li><a href="{{route('logout')}}"> <i class="fas fa-sign-out-alt"> Keluar</i></a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->
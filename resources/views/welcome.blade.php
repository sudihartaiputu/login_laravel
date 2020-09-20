@include('layouts.home.navbar')
<!-- HEADER -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('public/assets/welcome/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Malangke Gemilang</h1>
                <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">SMA Negeri 11 Luwu Utara Terdepan dalam Inovasi </p>
            </div>
        </div>
    </div>
</section>
<!-- FASILITAS -->
<section class="ftco-section services-section bg-light">
    <div class="container">
        <div class="row d-flex">
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-flex">
                    <div class="icon"><img src="{{asset('public/img/pramuka.png')}}" style="width:70px;height:70px" alt=""></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Pramuka</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-flex">
                    <div class="icon"><img src="{{asset('public/img/paskibra.png')}}" style="width:70px;height:70px" alt=""></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Paskibraka</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-flex">
                    <div class="icon"><img src="{{asset('public/img/PMI.png')}}" style="width:70px;height:70px" alt=""></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">PMR</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services d-flex">
                    <div class="icon"><img src="{{asset('public/img/pencaksilat.png')}}" style="width:70px;height:70px" alt=""></div>
                    <div class="media-body">
                        <h3 class="heading mb-3">Pencak Silat</h3>
                        <p>A small river named Duden flows by their place and supplies.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- GURU -->
<section class="ftco-section ftco-team img" style="background-image:url('public/assets/welcome/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section heading-section-white text-center ftco-animate">
                <span class="subheading">Personil UPT SMAN 11 Luwu Utara</span>
                <h2 class="mb-2">Tenaga<span> Pendidik & Kependidikan</span></h2>
                <p>Bersama Menuju Malangke Gemilang</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="carousel-team owl-carousel">
                    @foreach ($guru as $g)
                    <div class="item">
                        <div class="guru-wrap text-center">
                            <div class="img" style="background-image: url('{{asset($g->foto)}}');"></div>
                            <div class="text">
                                <h6 class="mb-0">{{$g->name}}</h6>
                                <span class="position">{{$g->nip}}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            @foreach ($posts as $post)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="{{ route ('post.isi', $post->slug) }}" class="block-20" style="background-image: url('{{$post->gambar}}');">
                    </a>
                    <div class="text mt-3 float-right d-block">
                        <div class="d-flex align-items-center p-2 pr-3 mb-4 topp">
                            <div class="one">
                                <span class="day mr-1">{{$post->created_at->day}}</span>
                            </div>
                            <div class="two">
                                <span class="yr">{{$post->created_at->year}}</span>
                                <span class="mos">{{date('F', strtotime($post->created_at))}}</span>
                            </div>
                        </div>
                        <h3 class="heading"><a href="{{ route ('post.isi', $post->slug) }}">{{$post->judul}}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- BLOG -->
        </div>

    </div>
</section>
@include('layouts.home.footer')
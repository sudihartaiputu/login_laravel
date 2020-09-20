@include('layouts.home.navbar')

<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('public/assets/welcome/images/bg_2.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="mb-3 bread">Berita</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Berita <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            @foreach ($data as $post)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="{{ route ('post.isi', $post->slug) }}" class="block-20" style="background-image: url('{{asset($post->gambar)}}');">
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

        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li>{{$data->links()}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.home.footer')
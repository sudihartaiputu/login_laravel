{{-- AWAL --}}
@extends('layouts.siswa.main')
@section('konten')


<!-- Start course-details Area -->
<div class="col-lg-8 posts-list">
    <div class="single-post row">
        <div class="col-lg-12">
            @foreach ($data as $hasil)
            <div class="feature-img">
                <img class="img-fluid" src="{{asset($hasil->gambar)}}" alt="">
            </div>
        </div>
        <div class="col-lg-3  col-md-3 meta-details">
            <ul class="tags">
                @foreach ($data as $m => $hasil)
                @foreach ($hasil->kelas as $kls)
                <li><a href="#">{{$kls->nama}}</a></li>
                @endforeach
                @endforeach
            </ul>
            <div class="user-details row">
                <p class="user-name col-lg-12 col-md-12 col-6"><a href="#">{{$hasil->guru->name}}</a> <span class="fa fa-user"></span></p>
                <p class="date col-lg-12 col-md-12 col-6"><a href="#">{{$hasil->created_at->diffForHumans()}}</a> <span class="fas fa-calendar"></span></p>
                <p class="view col-lg-12 col-md-12 col-6"><a href="#">{{$hasil->visit}} kali dibaca</a> <span class="fas fa-eye"></span></p>
                <p class="comments col-lg-12 col-md-12 col-6"><a href="#">06 Komentar</a> <span class="fas fa-comments"></span></p>
                <ul class="social-links col-lg-12 col-md-12 col-6">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-line"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>


                </ul>
            </div>
        </div>
        <div class="col-lg-9 col-md-9">
            <h3 class="mt-20 mb-20">{{$hasil->judul}}</h3>
            <p class="excert">
                <?= $hasil->konten ?>
        </div>
        <div class="col-lg-12">
            <div class="quotes">
                MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training.
            </div>
            <div class="row mt-30 mb-30">
                <div class="col-6">
                    <img class="img-fluid" src="img/blog/post-img1.jpg" alt="">
                </div>
                <div class="col-6">
                    <img class="img-fluid" src="img/blog/post-img2.jpg" alt="">
                </div>
                <div class="col-lg-12 mt-30">
                    <p>
                        MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower.
                    </p>
                    <p>
                        MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower.
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End course-details Area -->
    @endsection
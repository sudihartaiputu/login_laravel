{{-- AWAL --}}
@extends('layouts.siswa.main')
@section('title', 'SMANEV | Lutra')
@section('konten')


<!-- Start course-details Area -->
<section class="course-details-area pt-120">
    <div class="container">
        <div class="row">
            @foreach ($data as $materi)
            <div class="col-lg-8 left-contents">
                <div class="main-image">
                    <img class="img-fluid" src="{{ asset ($materi->gambar) }}" alt="">
                </div>
                <div class="jq-tab-wrapper" id="horizontalTab">
                    <div class="jq-tab-menu">
                        <div class="jq-tab-title active" data-tab="1">Kompetensi Dasar</div>
                        <div class="jq-tab-title" data-tab="2">Tujuan Pembelajaran</div>
                        <div class="jq-tab-title" data-tab="3">Materi</div>
                    </div>
                    <div class="jq-tab-content-wrapper">
                        <div class="jq-tab-content active" data-tab="1">


                        </div>
                        <div class="jq-tab-content comment-wrap" data-tab="2">


                        </div>
                        <div class="jq-tab-content" data-tab="3">

                            <div class="col-12">
                                <?= $materi->konten ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 right-contents">
                <ul>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p>Nama Guru :</p>
                            <span class="or">{{$materi->guru->name}}</span>
                        </a>
                    </li>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p>Mata Pelajaran </p>
                            <span>{{$materi->mapel->nama}}</span>
                        </a>
                    </li>
                    <li>
                        <a class="justify-content-between d-flex" href="#">
                            <p>Dibuat </p>
                            <span>{{$materi->created_at->diffForHumans ()}}</span>
                        </a>
                    </li>

                </ul>

            </div>
        </div>
        @endforeach

    </div>
</section>
<!-- End course-details Area -->
@endsection
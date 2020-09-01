{{-- AWAL --}}
@extends('layouts.guru.main')

@section('title', 'SMANEV | Lutra')
@section('judul', 'Tambah Materi')

@section('konten')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- PESAN ERROR -->
                        @if(count($errors)>0)
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{$error}}
                        </div>

                        @endforeach
                        @endif
                        <form action="{{ route('gurumateri.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="judul materi">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Mata Pelajaran</label>
                                <select class="form-control" id="mapel_id" name="mapel_id">
                                    <option value="" holder>Pilih Mata Pelajaran</option>
                                    @foreach ($mapel as $m)
                                    <option value="{{$m->id}}">{{$m->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <select class="select2" multiple="multiple" data-placeholder="Pilih..." style="width: 100%;" name="kelas_id[]">
                                    @foreach($kelas as $k)
                                    <option value="{{$k->id}}">{{$k->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Isi Materi</label>
                                <textarea id="konten" name="konten" class="textarea"></textarea>
                            </div>
                            <div class="form-group">
                                <b>Cover</b><br />
                                <input type="file" name="gambar">
                            </div>
                            <hr>
                            <div class="form-group">
                                <button class="btn btn-primary float-right">Simpan</button>

                            </div>

                        </form>
                    </div>

                </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
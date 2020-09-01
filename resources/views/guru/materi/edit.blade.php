{{-- AWAL --}}
@extends('layouts.guru.main')

@section('title', 'SMANEV | Lutra')
@section('judul', 'Edit Materi')

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
                        <form action="{{ route('gurumateri.update', $materi->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul" value="{{$materi->judul}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Mata Pelajaran</label>
                                <select class="form-control" id="mapel_id" name="mapel_id">
                                    <option value="" holder>Pilih Mata Pelajaran</option>
                                    @foreach ($mapel as $m)
                                    <option value="{{$m->id}}" @if($m->id == $materi->mapel_id)
                                        selected
                                        @endif
                                        >{{$m->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <select class="select2" multiple="multiple" style="width: 100%;" name="kelas_id[]">
                                    @foreach($kelas as $k)
                                    <option value="{{$k->id}}" @foreach ($materi->kelas as $value)
                                        @if($k->id == $value->id)
                                        selected
                                        @endif
                                        @endforeach
                                        >{{$k->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Isi Materi</label>
                                <textarea id="konten" name="konten" class="textarea">{{$materi->konten}}</textarea>
                            </div>
                            <div class="form-group">
                                <b>Cover</b><br />
                                <input type="file" name="gambar">
                            </div>
                            <hr>
                            <div class="form-group">
                                <button class="btn btn-warning float-right">Update</button>

                            </div>

                        </form>
                    </div>

                </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
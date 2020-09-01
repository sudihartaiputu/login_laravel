{{-- AWAL --}}
@extends('layouts.guru.main')

@section('title', 'SMANEV | Lutra')
@section('judul', 'Tambah Mapel dan Kelas Mengajar')

@section('konten')

<section class="content">
    <div class="container-fluid">
        <div class="container">
            {{--AKHIR --}}
            <div class="row">
                <div class="col-12">
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">

                    <form action="{{ route('guru.kelas.store') }}" method="POST">
                        @csrf
                        <form>
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
                                <label for="exampleFormControlSelect1">Kelas</label>
                                <select class="select2" multiple="multiple" data-placeholder="Pilih..." style="width: 100%;" name="kelas_id[]">
                                    @foreach($kelas as $k)
                                    <option value="{{$k->id}}">{{$k->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="card-footer bg-whitesmoke text-md-right">
                                <button type="submit" class="btn btn-primary" id="save-btn">Simpan</button>
                            </div>
                        </form>

                        <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
</section>

</section>
@endsection
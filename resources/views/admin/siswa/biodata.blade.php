{{-- AWAL --}}
@extends('layouts.admin.main')

@section('title', 'SMANEV | Lutra')
@section('judul', 'Edit Biodata Siswa')

@section('konten')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
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
                        <form action="{{ route('siswa.addbiodata', $siswa->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <fieldset disabled>
                                <div class="form-group">
                                    <label for="exampleInput1 hidden">Nama</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{$siswa->name}}">
                                </div>
                                <small id="namahelp" class="form-text text-muted">Jika ada kesalahan nama Harap Hubungi Operator</small>
                            </fieldset>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Kelas</label>
                                <select class="form-control" id="kelas_id" name="kelas_id">
                                    <option value="" holder>Pilih Kelas</option>
                                    <option value="1">X.IPA.1</option>
                                    <option value="2">X.IPA.2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInput1">Nama Ayah</label>
                                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" value="{{$siswa->biodatasiswa->nama_ayah}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInput1">Nama Ibu</label>
                                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="{{$siswa->biodatasiswa->nama_ibu}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInput1">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="{{$siswa->biodatasiswa->alamat}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInput1">No HP</label>
                                <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{$siswa->biodatasiswa->no_hp}}">
                            </div>
                            <div class="form-group">
                                <b>Foto</b><br />
                                <input type="file" name="foto">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-warning float-right">Simpan</button>

                            </div>

                        </form>
                    </div>
                    <div class="col-4">
                        <!-- CHAT -->
                    </div>
                </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->



@endsection
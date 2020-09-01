{{-- AWAL --}}
@extends('layouts.admin.main')

@section('title', 'SMANEV | Lutra')
@section('judul', 'Tambah Siswa Skl')

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
                        <form action="{{ route('siswaskl.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInput1">NIS</label>
                                <input type="text" class="form-control" id="nis" name="nis" value="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInput1">NISN</label>
                                <input type="text" class="form-control" id="nisn" name="nisn" value="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInput1">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama lengkap">
                            </div>
                            <div class="form-group">
                                <label for="exampleInput1">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                            </div>
                            <div class="form-group">
                                <label for="exampleInput1">Tanggal Lahir</label>
                                <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                <select class="form-control" id="jk" name="jk">
                                    <option value="" holder>Pilih Jenis Kelamin</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Role Akses</label>
                                <select class="form-control" id="level" name="level">
                                    <option value="siswa">Siswa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInput1">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary float-right">Simpan</button>

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
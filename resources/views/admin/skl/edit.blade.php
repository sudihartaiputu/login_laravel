{{-- AWAL --}}
@extends('layouts.admin.main')

@section('title', 'SMANEV | Lutra')
@section('judul', 'Edit Siswa Skl')

@section('konten')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
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
                            <div class="form-group row">
                                <label for="inputtext" class="col-sm-4 col-form-label">NIS</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nis" name="nis" value="{{$siswaskl->nis}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext" class="col-sm-4 col-form-label">NISN</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nisn" name="nisn" value="{{$siswaskl->nisn}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext" class="col-sm-4 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama" name="nama" value="{{$siswaskl->name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext" class="col-sm-4 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{$siswaskl->tempat_lahir}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{$siswaskl->tanggal_lahir}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                                <select class="form-control" id="jk" name="jk">
                                    <option value="" holder>Pilih Jenis Kelamin</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext" class="col-sm-4 col-form-label">Nomor Peserta</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nopes" name="nopes" value="{{$siswaskl->nopes}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext" class="col-sm-4 col-form-label">Kelas</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="kelas" name="kelas" value="{{$siswaskl->kelas}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext" class="col-sm-4 col-form-label">Jurusan</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="jurusan" name="jurusan" value="{{$siswaskl->jurusan}}">
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <!-- PENTING -->
                        <div class="form-group row">
                            <label for="inputtext" class="col-sm-4 col-form-label">Level</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="level" name="level" value="{{$siswaskl->level}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputtext" class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="email" name="email" value="{{$siswaskl->email}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputtext" class="col-sm-4 col-form-label">Password</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="password" name="password" value="{{$siswaskl->sandi}}">
                            </div>
                        </div>
                        <!-- END PENTING -->
                        <div class="form-group row">
                            <label for="inputtext" class="col-sm-4 col-form-label">Keterangan</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{$siswaskl->keterangan}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary float-right">Simpan</button>

                        </div>
                        </form>
                    </div>
                </div>
                </form>
            </div>
        </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->



@endsection
{{-- AWAL --}}
@extends('layouts.admin.main')

@section('title', 'SMANEV | Lutra')
@section('judul', 'Pengaturan Kelulusan')

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
                        @foreach ($pengaturanskl as $skl)
                        <form action="{{route('skl.pengaturanupdate', $skl->id)}}" method="POST" enctype="multipart/form-data">
                            @endforeach
                            @csrf
                            @method('patch')
                            @foreach($pengaturanskl as $pengskl)
                            <div class="form-group row">
                                <label for="inputtext" class="col-sm-3 col-form-label">Nama Sekolah</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" value="{{ $pengskl->nama_sekolah }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext" class="col-sm-3 col-form-label">NPSN</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="npsn" name="npsn" value="{{ $pengskl->npsn }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext" class="col-sm-3 col-form-label">NSS</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nss" name="nss" value="{{ $pengskl->nss }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext" class="col-sm-3 col-form-label">Nama Kepala Sekolah</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nama_kepsek" name="nama_kepsek" value="{{ $pengskl->nama_kepsek }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext" class="col-sm-3 col-form-label">NIP</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nip_kepsek" name="nip_kepsek" value="{{ $pengskl->nip_kepsek }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext" class="col-sm-3 col-form-label">Alamat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $pengskl->alamat }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext" class="col-sm-3 col-form-label">Kota</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="kota" name="kota" value="{{ $pengskl->kota }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext" class="col-sm-3 col-form-label">Provinsi</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="provinsi" name="provinsi" value="{{ $pengskl->provinsi }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputtext" class="col-sm-3 col-form-label">Tanggal Pengumuman</label>
                                <div class="col-sm-9">
                                    <input type="text" class="datepicker-here form-control" data-timepicker="true" data-language="en" data-position="top left" id="tanggal_pengumuman" name="tanggal_pengumuman" value="{{ $pengskl->tanggal_pengumuman }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <b>Stempel Sekolah</b> <br>
                                    <input type="file" name="stempel"> <br> <br>
                                    <img src="{{$pengskl->stempel}}" style="width:150px;height:150px;" alt="Stempel">
                                </div>
                                <div class="col-sm-6">
                                    <b>Tanda Tangan Kepala Sekolah</b> <br>
                                    <input type="file" name="ttd"> <br> <br>
                                    <img src="{{$pengskl->ttd}}" style="width:150px;height:100px;" alt="Tanda Tangan">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <b>Ukuran Stempel</b><br />
                                    <input type="text" class="form-control" id="wtempel" name="wstempel" value="{{$pengskl->wstempel}}">
                                </div>
                                <div class="col-sm-6">
                                    <b>Ukuran Tanda Tangan</b><br />
                                    <input type="text" class="form-control" id="wttd" name="wttd" value="{{$pengskl->wttd}}">
                                </div>
                            </div>
                            @endforeach
                            <div class="form-group">
                                <button class="btn btn-warning float-right">Update</button>

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
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
                        <form action="{{ route('siswaskl.update', $siswaskl->id) }}" method="POST">
                            @csrf
                            @method('put')
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
                                    <input type="text" class="form-control" id="name" name="name" value="{{$siswaskl->name}}">
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
                            <div class="form-group row">
                                <label for="exampleFormControlSelect1" class="col-sm-4 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="jk" name="jk">
                                        <option value="" holder>Pilih Jenis Kelamin</option>
                                        <option value="L" @if($siswaskl->jk == 'L') selected @endif>Laki-Laki</option>
                                        <option value="P" @if($siswaskl->jk == 'P') selected @endif>Perempuan</option>
                                    </select>
                                </div>
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
                                <label for="exampleFormControlSelect1" class="col-sm-4 col-form-label">Keterangan</label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="keterangan" name="keterangan">
                                        <option value="0" @if($siswaskl->keterangan == '0') selected @endif>Tidak Lulus</option>
                                        <option value="1" @if($siswaskl->keterangan == '1') selected @endif>Lulus</option>
                                        <option value="2" @if($siswaskl->keterangan == '2') selected @endif>Lulus Bersyarat</option>
                                    </select>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-body">

                        <!-- NILAI -->
                        <div class="form-group row">
                            <label for="inputtext" class="col-sm-10 col-form-label">Pendidikan Agama</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="n_agama" name="n_agama" value="{{$siswaskl->n_agama}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputtext" class="col-sm-10 col-form-label">Pendidikan Kewarganegaraan</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="n_pkn" name="n_pkn" value="{{$siswaskl->n_pkn}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputtext" class="col-sm-10 col-form-label">Bahasa Indonesia</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="n_bindo" name="n_bindo" value="{{$siswaskl->n_bindo}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputtext" class="col-sm-10 col-form-label">Bahasa Inggris</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="n_basing" name="n_basing" value="{{$siswaskl->n_basing}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputtext" class="col-sm-10 col-form-label">Matematika</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="n_mtk" name="n_mtk" value="{{$siswaskl->n_mtk}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputtext" class="col-sm-10 col-form-label">Sejarah Indonesia</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="n_sejindo" name="n_sejindo" value="{{$siswaskl->n_sejindo}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputtext" class="col-sm-10 col-form-label">Seni Budaya</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="n_sbud" name="n_sbud" value="{{$siswaskl->n_sbud}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputtext" class="col-sm-10 col-form-label">Pendidikan Jasmani</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="n_pjs" name="n_pjs" value="{{$siswaskl->n_pjs}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputtext" class="col-sm-10 col-form-label">Prakarya & Kewirausahaan</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="n_prakarya" name="n_prakarya" value="{{$siswaskl->n_prakarya}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputtext" class="col-sm-10 col-form-label">Matematika / Sejarah</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="n_minat1" name="n_minat1" value="{{$siswaskl->n_minat1}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputtext" class="col-sm-10 col-form-label">Fisika / Ekonomi</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="n_minat2" name="n_minat2" value="{{$siswaskl->n_minat2}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputtext" class="col-sm-10 col-form-label">Kimia / Sosiologi</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="n_minat3" name="n_minat3" value="{{$siswaskl->n_minat3}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputtext" class="col-sm-10 col-form-label">Biologi / Geografi</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="n_minat4" name="n_minat4" value="{{$siswaskl->n_minat4}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputtext" class="col-sm-10 col-form-label">Lintas Minat</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="n_minat5" name="n_minat5" value="{{$siswaskl->n_minat5}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputtext" class="col-sm-10 col-form-label">Rata - Rata</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="n_minat6" name="n_minat6" value="{{$siswaskl->n_minat6}}">
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
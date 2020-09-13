@extends('layouts.guru.main')

@section('konten')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="{{asset('public/assets/admin/dist/img/user2-160x160.jpg')}}" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center"></h3>

                        <p class="text-muted text-center">{{ Auth::user()->name }}</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Level :</b> <a class="float-right">{{ Auth::user()->level }}</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- About Me Box -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Login Data</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-envelope mr-1"></i> Email</strong>
                        <p class="text-muted">
                            {{ Auth::user()->email }}
                        </p>
                        <hr>
                        <strong><i class="fas fa-key mr-1"></i> Password</strong>
                        <p class="text-muted">
                            {{ Auth::user()->sandi }}
                        </p>
                        <hr>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#biodata" data-toggle="tab">Biodata</a></li>
                        </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="biodata">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="inputtext" class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nik" name="nik" value="{{ Auth::user()->nik }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputtext" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}">
                                        </div>
                                    </div>
                                    <div class=" form-group row">
                                        <label for="inputtext" class="col-sm-2 col-form-label">NIP</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nip" name="nip" value="{{ Auth::user()->nip }}">
                                        </div>
                                    </div>
                                    <div class=" form-group row">
                                        <label for="inputtext" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="{{ Auth::user()->tempat_lahir }}">
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ Auth::user()->tanggal_lahir }}">

                                        </div>
                                    </div>
                                    <div class=" form-group row">
                                        <label for="inputtext" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" id="jk" name="jk">
                                                <option value="" holder>Pilih Jenis Kelamin</option>
                                                <option value="L" @if(Auth::user()->jk == 'L') selected @endif>Laki-Laki</option>
                                                <option value="P" @if(Auth::user()->jk == 'P') selected @endif>Perempuan</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class=" form-group row">
                                        <label for="inputEmail" class="col-sm-2 col-form-label">Foto</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" id="foto" name="foto">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div><!-- /.card-body -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
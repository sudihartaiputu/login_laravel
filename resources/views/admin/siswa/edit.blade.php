{{-- AWAL --}}
@extends('layouts.admin.main')

@section('title', 'SMANEV | Lutra')
@section('judul', 'Edit Siswa')

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
                        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="exampleInput1">NIS</label>
                                <input type="text" class="form-control" id="nis" nis="nis" value="{{$siswa->nis}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInput1">NISN</label>
                                <input type="text" class="form-control" id="nisn" name="nisn" value="{{$siswa->nisn}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInput1">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$siswa->name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Role Akses</label>
                                <select class="form-control" id="level" name="level">
                                    <option value="guru" @if($siswa->level == 'osis') selected @endif>Osis</option>
                                    <option value="walas" @if($siswa->level == 'siswa') selected @endif>Siswa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInput1">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{$siswa->email}}">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-warning float-right">Update</button>

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
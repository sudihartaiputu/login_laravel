{{-- AWAL --}}
@extends('layouts.admin.main')

@section('title', 'SMANEV | Lutra')
@section('judul', 'Tambah Mata Pelajaran')

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
                        <form action="{{ route('mapel.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInput1">Nama Pelajaran</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama pelajaran">
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
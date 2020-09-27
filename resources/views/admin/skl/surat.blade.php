{{-- AWAL --}}
@extends('layouts.admin.main')

@section('title', 'SMANEV | Lutra')
@section('judul', 'Pengaturan Surat')

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
                        @foreach ($suratskl as $hasil)
                        <div class="row">
                            <form action="{{route('skl.suratupdate', $hasil->id)}}" method="POST" enctype="multipart/form-data">
                                @endforeach
                                @csrf
                                @method('patch')
                                @foreach($suratskl as $surat)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">Nama Surat</label>
                                        <input type="text" class="form-control" name="nama_surat" value="{{ $setskl->nama_surat }}" aria-describedby="helpId">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nama">Tanggal Surat</label>
                                        <input type="text" class="form-control" name="tgl_surat" value="{{ $setskl->tgl_surat }}" aria-describedby="helpId">
                                    </div>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="header">File Header</label>
                            <input type="file" class="form-control-file" name="header" id="header" aria-describedby="fileHelpId">

                        </div>
                        <div class="form-group">
                            <img src="{{ ('/data_file/'). $setskl->header }}" width="100%">
                        </div>
                        <div class="form-group">
                            <label>Dasar Surat</label>
                            <textarea id="pembuka" name="pembuka" class="textarea">{{ $surat->pembuka }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Isi Surat</label>
                            <textarea id="isi" name="isi" class="textarea">{{ $surat->isi_surat }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Pentutup Surat</label>
                            <textarea id="penutup" name="penutup" class="textarea">{{ $surat->penutup }}</textarea>
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
{{-- AWAL --}}
@extends('layouts.admin.main')

@section('title', 'SMANEV | Lutra')
@section('judul', 'Tambah Postingan')

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
                        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="judul postingan">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Kategori</label>
                                <select class="form-control" id="kategori_id" name="kategori_id">
                                    <option value="" holder>Pilih kategori</option>
                                    @foreach ($kategori as $k)
                                    <option value="{{$k->id}}">{{$k->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tags</label>
                                <select class="select2" multiple="multiple" data-placeholder="Pilih..." style="width: 100%;" name="tags[]">
                                    @foreach($tag as $t)
                                    <option value="{{$t->id}}">{{$t->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Isi Konten</label>
                                <textarea id="konten" name="konten" class="textarea"></textarea>
                            </div>
                            <div class="form-group">
                                <b>Cover</b><br />
                                <input type="file" name="gambar">
                            </div>
                            <hr>
                            <div class="form-group">
                                <button class="btn btn-primary float-right">Simpan</button>

                            </div>

                        </form>
                    </div>

                </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
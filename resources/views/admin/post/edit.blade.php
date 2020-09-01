{{-- AWAL --}}
@extends('layouts.admin.main')

@section('title', 'SMANEV | Lutra')
@section('judul', 'Edit Postingan')

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
                        <form action="{{ route('post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Judul</label>
                                <input type="text" class="form-control" id="judul" name="judul" value="{{$post->judul}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Kategori</label>
                                <select class="form-control" id="kategori_id" name="kategori_id">
                                    <option value="" holder>Pilih kategori</option>
                                    @foreach ($kategori as $k)
                                    <option value="{{$k->id}}" @if($k->id == $post->kategori_id)
                                        selected
                                        @endif
                                        >{{$k->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tags</label>
                                <select class="select2" multiple="multiple" style="width: 100%;" name="tags[]">
                                    @foreach($tag as $t)
                                    <option value="{{$t->id}}" @foreach ($post->tags as $value)
                                        @if($t->id == $value->id)
                                        selected
                                        @endif
                                        @endforeach
                                        >{{$t->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Isi Konten</label>
                                <textarea id="konten" name="konten" class="textarea">{{$post->konten}}</textarea>

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
</section>
@endsection
{{-- Footer  --}}
@section('footer')
<script>
    $(function() {
        // Summernote
        $('.textarea').summernote()
    })
</script>
@endsection
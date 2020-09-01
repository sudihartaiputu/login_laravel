{{-- AWAL --}}
@extends('layouts.admin.main')

@section('title', 'SMANEV | Lutra')
@section('judul', 'Post')

@section('konten')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- PESAN SUKSES -->
                        @if(Session::has('sukses'))
                        <div class="alert alert-success" role="alert">
                            {{ Session ('sukses')}}
                        </div>

                        @endif
                        <a class="btn btn-primary btn-sm mb-3" href="{{ route('post.create')}}">Tambah Postingan</a>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th style="text-align:center">Judul</th>
                                    <th style="text-align:center">Kategori</th>
                                    <th style="text-align:center">Tags</th>
                                    <th width="15%" style="text-align:center">Gambar</th>
                                    <th width="15%" style="text-align:center">Penulis</th>
                                    <th width="10%" style="text-align:center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($post as $p => $hasil)
                                <tr>
                                    <td>{{$p + $post->firstitem() }}</td>
                                    <td>{{$hasil->judul}}
                                    <td style="text-align:center"><span class="badge badge-primary">{{$hasil->kategori->nama}}</span>
                                    <td>@foreach ($hasil->tags as $tag)
                                        <span class="badge badge-success">{{$tag->nama}}</span><br>
                                        @endforeach
                                    <td style="text-align:center"><img src="{{ asset ($hasil->gambar) }}" class="img-fluid" style="width:100px"></td>
                                    <td style="text-align:center">{{$hasil->users->name}}</td>
                                    <td style="text-align:center">
                                        <form action="{{route('post.destroy', $hasil->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a class="fas fa-edit btn btn-primary btn-sm" href="{{route ('post.edit', $hasil->id)}}"></a>
                                            <button type="submit" class="far fa-share-square btn btn-warning btn-sm"></button>
                                        </form>
                                        </>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$post->links()}}
                    </div>
                    <div class="card-footer">
                        Postingan ini muncul di semua pengunjung
                    </div>
                    <!-- /.card-footer-->
                </div>

            </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->




@endsection
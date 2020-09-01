{{-- AWAL --}}
@extends('layouts.admin.main')

@section('title', 'SMANEV | Lutra')
@section('judul', 'Sampah Post')

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
                                        <form action="{{route('post.kill', $hasil->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a class="far fa-share-square btn btn-info btn-sm" href="{{route('post.restore', $hasil->id)}}"></a>
                                            <button type="submit" class="fas fa-trash-alt btn btn-danger btn-sm"></button>
                                        </form>
                                    </td>
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
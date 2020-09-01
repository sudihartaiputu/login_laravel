{{-- AWAL --}}
@extends('layouts.admin.main')

@section('title', 'SMANEV | Lutra')
@section('judul', 'Tags')

@section('konten')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <!-- PESAN SUKSES -->
                        @if(Session::has('sukses'))
                        <div class="alert alert-success" role="alert">
                            {{ Session ('sukses')}}
                        </div>

                        @endif
                        <a class="btn btn-primary btn-sm mb-3" href="{{ route('tag.create')}}">Tambah Tag</a>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th style="text-align:center">Nama Tag</th>
                                    <th width="20%" style="text-align:center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tag as $t => $hasil)
                                <tr>
                                    <td>{{$t + $tag->firstitem() }}</td>
                                    <td>{{$hasil->nama}}
                                    <td style="text-align:center">
                                        <form action="{{route('tag.destroy', $hasil->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a class="fas fa-edit btn btn-primary btn-sm" href="{{route ('tag.edit', $hasil->id)}}"></a>
                                            <button type="submit" class="fas fa-trash-alt btn btn-danger btn-sm"></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="float-right mb-3">{{$tag->links()}}</div>

                    </div>
                </div>
                <div class="col-4">

                </div>
            </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->




@endsection
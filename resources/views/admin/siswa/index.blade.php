{{-- AWAL --}}
@extends('layouts.admin.main')

@section('title', 'SMANEV | Lutra')
@section('judul', 'Daftar Siswa')

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
                        <a class="btn btn-primary btn-sm mb-3" href="{{ route('siswa.create')}}">Tambah Siswa</a>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th style="text-align:center">NIS</th>
                                    <th style="text-align:center">Nama Siswa</th>
                                    <th style="text-align:center">Email</th>
                                    <th style="text-align:center" width="10%">Hak Akses</th>
                                    <th width="15%" style="text-align:center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswa as $result => $hasil)
                                <tr>
                                    <td>{{$result + $siswa->firstitem() }}</td>
                                    <td>{{$hasil->nis}}</td>
                                    <td>{{$hasil->name}}
                                    <td>{{$hasil->email}}
                                    <td>@if($hasil->level == 'siswa')<span class="badge badge-primary">Siswa</span>@endif
                                        @if($hasil->level == 'alumni')<span class="badge badge-warning">Alumni</span>@endif

                                    <td style="text-align:center">
                                        <form action="{{route('siswa.destroy', $hasil->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a class="fas fa-edit btn btn-primary btn-sm" href="{{route ('siswa.edit', $hasil->id)}}"></a>
                                            <button type="submit" class="fas fa-trash-alt btn btn-danger btn-sm"></button>

                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$siswa->links()}}
                    </div>
                </div>

            </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->




@endsection
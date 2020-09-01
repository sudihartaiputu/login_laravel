{{-- AWAL --}}
@extends('layouts.admin.main')

@section('title', 'SMANEV | Lutra')
@section('judul', 'Daftar Guru')

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
                        <a class="btn btn-primary btn-sm mb-3" href="{{ route('guru.create')}}">Tambah Guru</a>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th style="text-align:center">NIK</th>
                                    <th style="text-align:center">Nama Guru</th>
                                    <th style="text-align:center">Email</th>
                                    <th style="text-align:center" width="10%">Hak Akses</th>
                                    <th width="15%" style="text-align:center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($guru as $result => $hasil)
                                <tr>
                                    <td>{{$result + $guru->firstitem() }}</td>
                                    <td>{{$hasil->nik}}</td>
                                    <td>{{$hasil->name}}
                                    <td>{{$hasil->email}}
                                    <td>@if($hasil->level == 'guru')<span class="badge badge-primary">Guru</span>@endif
                                        @if($hasil->level == 'walas')<span class="badge badge-warning">Wali Kelas</span>@endif

                                    <td style="text-align:center">
                                        <form action="{{route('guru.destroy', $hasil->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a class="fas fa-edit btn btn-primary btn-sm" href="{{route ('guru.edit', $hasil->id)}}"></a>
                                            <button type="submit" class="fas fa-trash-alt btn btn-danger btn-sm"></button>
                                            <a class="fas fa-id-card btn btn-success btn-sm" href=""></a>

                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$guru->links()}}
                    </div>
                </div>

            </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->




@endsection
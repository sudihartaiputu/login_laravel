{{-- AWAL --}}
@extends('layouts.admin.main')

@section('title', 'SMANEV | Lutra')
@section('judul', 'Daftar Siswa Skl')

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
                        <a class="btn btn-primary btn-sm mb-3" href="{{ route('siswaskl.create')}}">Tambah Siswa</a>
                        <!-- IMPORT -->
                        <button type="button" class="btn btn-success btn-sm mb-3" data-toggle="modal" data-target="#import">
                            IMPORT
                        </button>
                        <!-- END IMPORT -->
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th style="text-align:center">NISN</th>
                                    <th style="text-align:center">Nama Siswa</th>
                                    <th style="text-align:center">Email</th>
                                    <th style="text-align:center" width="10%">Keterangan</th>
                                    <th width="15%" style="text-align:center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($siswaskl as $result => $hasil)
                                <tr>
                                    <td>{{$result + $siswaskl->firstitem() }}</td>
                                    <td>{{$hasil->nisn}}</td>
                                    <td>{{$hasil->name}}
                                    <td>{{$hasil->email}}
                                    <td>@if($hasil->keterangan == '0')<span class="badge badge-danger">Tidak Lulus</span>@endif
                                        @if($hasil->keterangan == '1')<span class="badge badge-primary">Lulus</span>@endif
                                        @if($hasil->keterangan == '2')<span class="badge badge-warning">Lulus Bersyarat</span>@endif

                                    <td style="text-align:center">
                                        <form action="{{route('siswaskl.destroy', $hasil->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a class="fas fa-edit btn btn-primary btn-sm" href="{{route ('siswaskl.edit', $hasil->id)}}"></a>
                                            <button type="submit" class="fas fa-trash-alt btn btn-danger btn-sm"></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$siswaskl->links()}}
                    </div>
                </div>

            </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- modal import -->
<div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">IMPORT DATA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('siswaskl.import')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>PILIH FILE</label>
                        <input type="file" name="file" class="form-control" required>
                    </div>
                    <p>Silahkan Download Template</p><a class="btn btn-primary btn-sm" href="{{asset('template/siswaskl.xlsx')}}">Template</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                    <button type="submit" class="btn btn-success">IMPORT</button>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection
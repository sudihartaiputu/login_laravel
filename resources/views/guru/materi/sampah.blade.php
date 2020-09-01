{{-- AWAL --}}
@extends('layouts.guru.main')

@section('title', 'SMANEV | Lutra')
@section('judul', 'Sampah Materi Pembelajaran')

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
                        <a class="btn btn-primary btn-sm mb-3" href="{{route('gurumateri.create')}}">Tambah Materi</a>
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="5%">No</th>
                                    <th style="text-align:center">Judul</th>
                                    <th style="text-align:center">Mata Pelajaran</th>
                                    <th style="text-align:center">Kelas</th>
                                    <th width="15%" style="text-align:center">Gambar</th>
                                    <th width="15%" style="text-align:center">Penulis</th>
                                    <th width="10%" style="text-align:center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($materi as $m => $hasil)
                                <tr>
                                    <td>{{$m + $materi->firstitem() }}</td>
                                    <td>{{$hasil->judul}}
                                    <td style="text-align:center">{{$hasil->mapel->nama}}<span class="badge badge-primary"></span>
                                    <td>@foreach ($hasil->kelas as $kls)
                                        <span class="badge badge-success">{{$kls->nama}}</span><br>
                                        @endforeach
                                    <td style="text-align:center"><img src="{{ asset ($hasil->gambar) }}" class="img-fluid" style="width:100px"></td>
                                    <td style="text-align:center">{{$hasil->guru->name}}</td>
                                    <td style="text-align:center">
                                        <form action="{{route('gurumateri.kill', $hasil->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a class="fas fa-share-square btn btn-primary btn-sm" href="{{route ('gurumateri.restore', $hasil->id)}}"></a>
                                            <button type="submit" class="far fa-trash-alt btn btn-danger btn-sm"></button>
                                        </form>
                                        </>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$materi->links()}}
                    </div>
                    <div class="card-footer">
                        Materi ini hanya muncul di Siswa
                    </div>
                    <!-- /.card-footer-->
                </div>

            </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->




@endsection
{{-- AWAL --}}
@extends('layouts.guru.main')

@section('title', 'SMANEV | Lutra')
@section('judul', 'Kelas dan Mata Pelajaran yang diajar')


@section('konten')
<section class="content">
    <div class="container-fluid">
        <div class="container">
            {{--AKHIR --}}
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
                {{ session('sukses') }}
            </div>
            @endif
            <div class="row">
                <div class="col-6">
                    <a class="btn btn-primary btn-sm" href="{{route('guru.kelas.create')}}">Tambah</a>

                </div>
                <div class="col-6">
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <div class="row">

                        <div class="col-8">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Kelas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($kelasajar->gurukelas as $kelas)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$kelas->mapel->nama}}</td>
                                        <td>
                                            <span class="badge badge-success">{{$kelas->kelas->nama}}</span><br>
                                        </td>
                                        <td>
                                            <form action="{{route('guru.kelas.delete', $kelas->id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <a class="fas fa-chalkboard-teacher btn-sm btn-info" href="/gurukelas/{{$kelas->kelas->id}}/lihatsiswa"></a>
                                                <button type="submit" class="far fa-trash-alt btn btn-danger btn-sm"></button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="col-4">
                            <h4>Perhatian !!!</h4> <br>
                            Silahkan memilih kelas yang Bapak Ibu Ajar
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
</section>



@endsection
@extends('layouts.main')
@section('content')

<!-- isi konten -->

<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            Data Mahasiswa
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md">
                    <form action="{{Route('admin.mahasiswa.search')}}" method="get">
                        <input type="text" name="keyword" class="form-control" placeholder="cari berdasarkan nama dan jurusan ..." value="{{old('keyword')}}">
                    </form>
                </div>

                <div class="col-md">
                    <div class="text-end mb-3">
                        <a href="{{Route('admin.mahasiswa.print')}}" class="btn btn-success" target="_blank">Cetak Data</a>
                        <a href="{{Route('admin.mahasiswa.create')}}" class="btn btn-primary">+ Tambah</a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Jurusan</td>
                            <td>NPM</td>
                            <td>Nama</td>
                            <td>Tanggal Lahir</td>
                            <td>Foto</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $mahasiswa)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$mahasiswa->jurusan}}</td>
                            <td>{{$mahasiswa->npm}}</td>
                            <td>{{$mahasiswa->nama_mahasiswa}}</td>
                            <td>{{Carbon\carbon::parse($mahasiswa->tanggal_lahir)->translatedFormat('d F Y')}}</td>
                            <td><img src="{{asset('storage/foto/'.$mahasiswa -> foto)}}" width="50" alt=""></td>
                            <td>
                                <form action="{{route('admin.mahasiswa.destroy',$mahasiswa->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{Route('admin.mahasiswa.edit',$mahasiswa->id)}}" class="btn btn-warning">Edit</a>
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
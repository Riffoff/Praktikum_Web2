@extends('layouts.main')
@section('content')

<!-- isi konten -->

<div class="container">
    <div class="card mt-4">
        <div class="card-body">

            <form action="{{Route('admin.mahasiswa.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!-- inputan -->
                <div class="form-group mb-3">
                    <label for="">Jurusan</label>
                    <select name="jurusan" id="" class="form-control">
                        <option value="">- Pilih -</option>
                        <option value="TI" {{$data->jurusan == 'TI' ? 'selected' : ''}}>TI</option>
                        <option value="Hukum" {{$data->jurusan == 'Hukum' ? 'selected' : ''}}>Hukum</option>
                        <option value="Ekonomi" {{$data->jurusan == 'Ekonomi' ? 'selected' : ''}}>Ekonomi</option>
                    </select>
                </div>

                <!-- inputan -->

                <!-- inputan -->
                <div class="form-group mb-3">
                    <label for="">NPM</label>
                    <input type="text" class="form-control" name="npm" value="{{$data->npm}}">
                </div>

                <!-- inputan -->
                <div class="form-group mb-3">
                    <label for="">Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama_mahasiswa" value="{{$data->nama_mahasiswa}}">
                </div>

                <!-- inputan -->
                <div class="form-group mb-3">
                    <label for="">Tanggal lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir" value="{{$data->tanggal_lahir}}">
                </div>

                <!-- inputan -->
                <label for="" class="mt-2">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki" {{$data->jenis_kelamin == 'Laki-Laki' ? 'checked' : ''}}>
                    <label class="form-check-label">
                        Laki - Laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan" {{$data->jenis_kelamin == 'Perempuan' ? 'checked' : ''}}>
                    <label class="form-check-label">
                        Perempuan
                    </label>
                </div>

                <!-- inputan -->
                <div class="form-group mb-3">
                    <label for="">Alamat</label>
                    <textarea name="alamat" class="form-control">{{$data->alamat}}</textarea>
                </div>

                <!-- inputan -->
                <div class="form-group mb-3">
                    <label for="">Hoby</label>
                    <input type="text" class="form-control" name="hoby" value="{{$data->hoby}}">
                </div>

                <!-- inputan -->
                <div class="form-group mb-3">
                    <label for="">Foto</label>
                    <input type="file" class="form-control" name="foto">
                    <small class="text-danger">isi jika hanya ingin meubah foto</small>
                </div>

                <!-- inputan -->
                <div class="text-end">
                    <a href="{{Route('admin.mahasiswa.index')}}" class="btn btn-sm btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-sm btn-danger">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('content')

<!-- isi konten -->

<div class="container">
    <div class="card mt-4">
        <div class="card-body">

            <form action="{{Route('admin.mahasiswa.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- inputan -->
                <div class="form-group mb-3">
                    <label for="">Jurusan</label>
                    <select name="jurusan" id="" class="form-control">
                        <option value="">- Pilih -</option>
                        <option value="TI">TI</option>
                        <option value="Hukum">Hukum</option>
                        <option value="Ekonomi">Ekonomi</option>
                    </select>
                </div>

                <!-- inputan -->

                <!-- inputan -->
                <div class="form-group mb-3">
                    <label for="">NPM</label>
                    <input type="text" class="form-control" name="npm">
                </div>

                <!-- inputan -->
                <div class="form-group mb-3">
                    <label for="">Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama_mahasiswa">
                </div>

                <!-- inputan -->
                <div class="form-group mb-3">
                    <label for="">Tanggal lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir">
                </div>

                <!-- inputan -->
                <label for="" class="mt-2">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki">
                    <label class="form-check-label">
                        Laki - Laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="perempuan">
                    <label class="form-check-label">
                        Perempuan
                    </label>
                </div>

                <!-- inputan -->
                <div class="form-group mb-3">
                    <label for="">Alamat</label>
                    <textarea name="alamat" class="form-control"></textarea>
                </div>

                <!-- inputan -->
                <div class="form-group mb-3">
                    <label for="">Hoby</label>
                    <input type="text" class="form-control" name="hoby">
                </div>

                <!-- inputan -->
                <div class="form-group mb-3">
                    <label for="">Foto</label>
                    <input type="file" class="form-control" name="foto">
                </div>

                <!-- inputan -->
                <div class="text-end">
                    <a href="{{Route('admin.mahasiswa.index')}}" class="btn btn-sm btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-sm btn-danger">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
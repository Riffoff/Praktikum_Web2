<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body onload="window.print()">
    <div class="text-center mt-4">
        <h2>Laporan Data Mahasiswa</h2>
        <h5>Tanggal {{Carbon\carbon::now()->format('d F Y')}}</h5>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>No</td>
                <td>Jurusan</td>
                <td>NPM</td>
                <td>Nama</td>
                <td>Tanggal Lahir</td>
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
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md text-center">
            Banjarmasin, {{Carbon\carbon::now()->format('d F Y')}}
            TTD
            <br>
            <br>
            <br>
            <br>
            (................................)

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
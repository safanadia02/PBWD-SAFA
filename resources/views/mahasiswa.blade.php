<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mahasiswa</title>
</head>
<body>
    <h1>INI HALAMAN MAHASISWA</h1>

    <h4>Halaman Tabel Mahasiswa</h4>
    <a href="/mahasiswa/create">Tambah Mahasiswa</a>

<!-- INI CONTOH TABLE -->
    <table border="1" style="border-collapse: collapse;">
        <thead style="background-color: yellow;">
            <tr>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mhs as $m)
            <tr>
                <td>{{ $m->nim}}</td>
                <td>{{$m->nama_mahasiswa}}</td>
                <td>{{$m->jk}}</td>
                <td>{{$m->ttl}}</td>
                <td>{{$m->alamat}}</td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
    <form action="" method="get"></form>
</body>
</html>
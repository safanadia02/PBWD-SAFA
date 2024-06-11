<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodi</title>
</head>
<body>
    <h1>INI HALAMAN PROGRAM STUDI</h1>

    <h4>Halaman Tabel Program Studi</h4>
    <a href="/prodi/create">Tambah Program Studi</a>

<!-- INI CONTOH TABLE -->
    <table border="1" style="border-collapse: collapse;">
        <thead style="background-color: yellow;">
            <tr>
                <th>No</th>
                <th>Nama Prodi</th>
                <th>Fakultas</th>
                <th>Kaprodi</th>
                <th>Sekprodi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prodi as $p)
            <tr>
                <td>{{$p->id }}</td>
                <td>{{$p->nama_prodi}}</td>
                <td>{{$p->fakultas}}</td>
                <td>{{$p->kaprodi}}</td>
                <td>{{$p->sekprodi}}</td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
    <form action="" method="get"></form>
</body>

</html>
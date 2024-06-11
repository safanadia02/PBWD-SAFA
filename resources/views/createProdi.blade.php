<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Prodi</h1>
    <hr>
<form action="/prodi" method="POST">
@csrf
    <table>
        <tr>
            <th style="text-align: left;">
                <label for="">Prodi</label>
            </th>
            <td>:</td>
            <td>
                <input type="text" name="prodi">
            </td>
        </tr>
        <tr>
            <th style="text-align: left;">
                <label for="">Fakultas</label>
            </th>
            <td>:</td>
            <td>
                <input type="text" name="fk">
            </td>
        </tr>
        <tr>
            <th style="text-align: left;">
                <label for="">Kaprodi</label>
            </th>
            <td>:</td>
            <td>
                <input type="text" name="kaprodi">
            </td>
        </tr>
        <tr>
            <th style="text-align: left;">
                <label for="">Sekprodi</label>
            </th>
            <td>:</td>
            <td>
                <input type="text" name="sekprodi">
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <button style="width:100%" type="submit">SIMPAN</button>
            </td>
        </tr>
    </table>
</form>
    
   
    
</body>
</html>
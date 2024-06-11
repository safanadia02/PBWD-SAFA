<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Mahasiswa</h1>
    <hr>
<form action="/mahasiswa" method="POST">
@csrf
    <table>
        <tr>
            <th style="text-align: left;">
                <label for="">NIM</label>
            </th>
            <td>:</td>
            <td>
                <input type=" number" name="nim">
            </td>
        </tr>
        <tr>
            <th style="text-align: left;">
                <label for="">NAMA</label>
            </th>
            <td>:</td>
            <td>
                <input type="text" name="nama">
            </td>
        </tr>
        <tr>
            <th style="text-align: left;">
                <label for="">TANGGAL LAHIR</label>
            </th>
            <td>:</td>
            <td>
                <input type="date" name="ttl">
            </td>
        </tr>
        <tr>
            <th style="text-align: left;">JENKEL</th>
            <td>:</td>
            <td>
                <select name="jk" id="">
                    <option value="L" >Pria</option>
                    <option value="P" >Wanita</option>
                </select>
            </td>
        </tr>
        <tr>
            <th style="text-align: left">ALAMAT</th>
            <td>:</td>
            <td> <textarea name="alamat" id="" cols="30" rows="10"></textarea></td>
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
<?php

require 'function.php';

$id = $_GET["id"];
$mhs = query("select * from mahasiswa where id = $id")[0];
//cek apakah tombol submit sudah ditekan
if(isset($_POST["submit"])){
        if(ubah($_POST)>0){
            echo "Data Berhasil Diubah";
        } else{
            echo "Data Gagal Diubah";
        }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Ubah Data Mahasiswa</h1>

    <form action="" method="post">
        <input type="hidden" name ="id" value="<?=$mhs["id"];?>">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"];?>">
            </li>
            <li>
                <label for="NIM">NIM : </label>
                <input type="text" name="NIM" id="NIM" value="<?= $mhs["NIM"];?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" value="<?= $mhs["email"];?>">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"];?>">
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"];?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>
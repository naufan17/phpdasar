<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $nama = $data["nama"];
    $NIM = $data["NIM"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];
    $gambar = $data["gambar"];

    $query = "insert into mahasiswa values('','$nama','$NIM','$email','$jurusan','$gambar')";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);  
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "delete from mahasiswa where id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $id = $data["id"];
    $nama = $data["nama"];
    $NIM = $data["NIM"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];
    $gambar = $data["gambar"];

    $query = "update mahasiswa set nama='$nama', NIM='$NIM', email='$email', jurusan='$jurusan', gambar='$gambar' where id=$id";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);  
}

?>
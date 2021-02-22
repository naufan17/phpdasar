<?php

require 'function.php';

$id = $_GET["id"];

if(hapus($id)>0)
{
    echo "Data Berhasil Dihapus";
} else{
    echo "Data gagal Dihapus";
}
?>
<?php

include "koneksi.php";

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun_terbit'];
$kategori = $_POST['id_kategori'];

mysqli_query($conn, "INSERT INTO buku 
VALUES (
NULL,
'$judul',
'$penulis',
'$penerbit',
'$tahun',
'$kategori'
)");

header("location:index.php");

?>
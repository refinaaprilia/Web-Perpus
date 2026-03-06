<?php

include "koneksi.php";

$id = $_POST['id_buku'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun_terbit'];
$kategori = $_POST['id_kategori'];

mysqli_query($conn, "UPDATE buku SET
judul='$judul',
penulis='$penulis',
penerbit='$penerbit',
tahun_terbit='$tahun',
id_kategori='$kategori'
WHERE id_buku='$id'");

header("location:index.php");

?>
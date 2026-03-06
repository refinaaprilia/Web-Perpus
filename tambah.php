<?php
include "koneksi.php";
?>

<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Tambah Buku</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background-color:#f5f9ff;">

<div class="container mt-5">

<div class="card shadow-sm">
<div class="card-body">

<h3 class="text-primary mb-4">➕ Tambah Buku</h3>

<form action="proses_tambah.php" method="POST">

<div class="mb-3">
<label class="form-label">Judul Buku</label>
<input type="text" name="judul" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Penulis</label>
<input type="text" name="penulis" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Penerbit</label>
<input type="text" name="penerbit" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Tahun Terbit</label>
<input type="number" name="tahun_terbit" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Kategori</label>

<select name="id_kategori" class="form-control">

<?php

$query = mysqli_query($conn, "SELECT * FROM kategori");

while($data = mysqli_fetch_array($query)){

?>

<option value="<?php echo $data['id_kategori']; ?>">
<?php echo $data['nama_kategori']; ?>
</option>

<?php } ?>

</select>

</div>

<button type="submit" class="btn btn-primary">Simpan</button>
<a href="index.php" class="btn btn-secondary">Kembali</a>

</form>

</div>
</div>

</div>

</body>
</html>
<?php
include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku='$id'");
$data = mysqli_fetch_array($query);
?>

<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<title>Edit Buku</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background-color:#f5f9ff;">

<div class="container mt-5">

<div class="card shadow-sm">
<div class="card-body">

<h3 class="text-primary mb-4">✏️ Edit Buku</h3>

<form action="update.php" method="POST">

<input type="hidden" name="id_buku" value="<?php echo $data['id_buku']; ?>">

<div class="mb-3">
<label class="form-label">Judul Buku</label>
<input type="text" name="judul" class="form-control"
value="<?php echo $data['judul']; ?>">
</div>

<div class="mb-3">
<label class="form-label">Penulis</label>
<input type="text" name="penulis" class="form-control"
value="<?php echo $data['penulis']; ?>">
</div>

<div class="mb-3">
<label class="form-label">Penerbit</label>
<input type="text" name="penerbit" class="form-control"
value="<?php echo $data['penerbit']; ?>">
</div>

<div class="mb-3">
<label class="form-label">Tahun Terbit</label>
<input type="number" name="tahun_terbit" class="form-control"
value="<?php echo $data['tahun_terbit']; ?>">
</div>

<div class="mb-3">
<label class="form-label">Kategori</label>

<select name="id_kategori" class="form-control">

<?php

$query_kategori = mysqli_query($conn, "SELECT * FROM kategori");

while($kategori = mysqli_fetch_array($query_kategori)){

$selected = ($kategori['id_kategori'] == $data['id_kategori']) ? "selected" : "";

?>

<option value="<?php echo $kategori['id_kategori']; ?>" <?php echo $selected; ?>>
<?php echo $kategori['nama_kategori']; ?>
</option>

<?php } ?>

</select>

</div>

<button type="submit" class="btn btn-primary">Update</button>
<a href="index.php" class="btn btn-secondary">Kembali</a>

</form>

</div>
</div>

</div>

</body>
</html>
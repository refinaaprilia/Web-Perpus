<?php
include "koneksi.php";

$query = mysqli_query($conn, "SELECT * FROM buku 
JOIN kategori ON buku.id_kategori = kategori.id_kategori");
?>

<table class="table table-striped table-hover">

<thead>
<tr>
<th>No</th>
<th>Judul</th>
<th>Penulis</th>
<th>Penerbit</th>
<th>Tahun</th>
<th>Kategori</th>
<th>Aksi</th>
</tr>
</thead>

<tbody>

<?php
$no = 1;

while ($data = mysqli_fetch_array($query)) {
?>

<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $data['judul']; ?></td>
<td><?php echo $data['penulis']; ?></td>
<td><?php echo $data['penerbit']; ?></td>
<td><?php echo $data['tahun_terbit']; ?></td>
<td><?php echo $data['nama_kategori']; ?></td>

<td>
<a href="edit.php?id=<?php echo $data['id_buku']; ?>" class="btn btn-primary btn-sm">Edit</a>

<a href="hapus.php?id=<?php echo $data['id_buku']; ?>" class="btn btn-danger btn-sm">Hapus</a>
</td>

</tr>

<?php } ?>

</tbody>
</table>
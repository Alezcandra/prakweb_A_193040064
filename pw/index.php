<?php 
require 'functions.php';
$buku = query("SELECT * FROM buku");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

<h1>Daftar buku</h1>

<a href="tambah.php">Tambah data buku</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>gambar</th>
		<th>judul</th>
		<th>penerbit</th>
		<th>penulis</th>
		<th>harga</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach( $buku as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
		</td>
		<td><img src="assets/<?= $row["gambar"]; ?>" width="50"></td>
		<td><?= $row["judul"]; ?></td>
		<td><?= $row["penerbit"]; ?></td>
		<td><?= $row["penulis"]; ?></td>
		<td><?= $row["harga"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	
</table>

</body>
</html>
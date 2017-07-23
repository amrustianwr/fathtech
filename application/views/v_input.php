<!DOCTYPE html>
<html>
<head>
		<title>CRUD</title>
</head>
<body>
	<center>
		<h1>Barang Masuk</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). '/crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="nama_barang"></td>
			</tr>
			<tr>
				<td>Jumlah Barang</td>
				<td><input type="text" name="stok_barang"></td>
			</tr>
			<tr>
				<td>tanggal</td>
				<td><input type="date" name="tanggal"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>

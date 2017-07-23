<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<center>
		<h1>Mengubah Data</h1>
		<h3>Edit Data</h3>
	<?php foreach($barang as $u){ ?>
	<form action="<?php echo base_url('/crud/update') ; ?>" method="post">
		<table style="margin:20px auto;">
      <tr>
				<td>Nama Barang</td>
				<td>
					<input type="hidden" name="no_barang" value="<?php echo $u->no_barang ?>">
					<input type="text" name="nama_barang" value="<?php echo $u->nama_barang ?>">
				</td>
			</tr>
			<tr>
				<td>Jumlah Barang</td>
				<td><input type="text" name="stok_barang" value="<?php echo $u->stok_barang ?>"></td>
			</tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</center>
</body>
</html>

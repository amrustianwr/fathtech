<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<center>
		<h1>Membli Barang</h1>
	<?php foreach($barang as $u){ ?>
	<form action="<?php echo base_url('/crud/hitung') ; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Jumlah barang yg dibeli</td>
				<input type="hidden" name="stok_barang" value="<?php echo $u->stok_barang ?>">

				<td><input type="number" name="stok_barang" value="<?php echo $u->stok_barang ?>"></td>
			</tr>
				<td></td>
				<td><input type="submit" value="Beli"></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</center>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body><center>
	<h1>List Data</h1>
	<table border="1">
		<tr>
      <th>No Barang</th>
			<th>Nama Barang</th>
			<th>Stok Barang</th>
			<th>Tanggal</th>
			<th>Action</th>
		</tr>
		<?php
		$no_barang = 1;
		foreach($barang as $u){
		?>
		<tr>
      <td><?php echo $u->no_barang ?></td>
			<td><?php echo $u->nama_barang ?></td>
			<td><?php echo $u->stok_barang ?></td>
			<td><?php echo $u->tanggal; ?></td>
			<td>
				<a href="<?=base_url('crud/edit/'.$u->no_barang)?>">Edit</a>
				<a href="<?=base_url('crud/beli/'.$u->no_barang)?>">Beli</a>
				<a href="<?=base_url('crud/hapus/'.$u->no_barang)?>">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
	<a href="<?=base_url('crud/tambah/')?>"> Tambah Barang </a>
</center>
</body>
</html>

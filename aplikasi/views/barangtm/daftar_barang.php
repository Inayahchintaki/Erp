<!DOCTYPE html>
<html>
<head>
	<title>Daftar barang</title>
</head>
<body>
	<h1>Daftar barang Tino Mastek</h1>
	<br>

	<a href="<?= APLIKASI;?>/barang/tambah">Tambah</a>
	
	<table border="1" width="75%">
		<thead>
			<tr>
				<th>Kode barang</th>
				<th>Nama barang</th>
				<th>Satuan</th>
				<th>Harga Satuan</th>
				<th>Detail</th>
				<th>Hapus</th>
				<th>Edit</th>
			

			</tr>
		</thead>

		<tbody>
			<?php foreach ($data['barangnya_tinomastek'] as $baris_barang): ?>
			<tr>
				<td><?= $baris_barang['kode_barang'];?></td>
				<td><?= $baris_barang['nama_barang'];?></td>
				<td><?= $baris_barang['satuan'];?></td>
				<td><?= $baris_barang['harga_satuan'];?></td>
				<td>
					<a href="<?= APLIKASI; ?>/barang/detail/<?= $baris_barang['id']; ?>">Detail</a>
				</td>

				<td>
					<a href="<?= APLIKASI; ?>/barang/hapus/<?= $baris_barang['id']; ?>">Hapus</a>
				</td>

				<td>
					<a href="<?= APLIKASI; ?>/barang/edit/<?= $baris_barang['id']; ?>">Edit</a>
				</td>

			</tr>
			<?php endforeach ?> 
		</tbody>
	</table>

	<a href="<?= APLIKASI;?>/barang/tambah">Tambah</a>
</body>
</html>
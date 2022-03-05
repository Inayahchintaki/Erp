<?php
$barang = $data['barangnya_tinomastek'];
$satuan = $data['satuan'];
?>


<!DOCTYPE html>
<html>
<head>
	<title>Update Barang</title>
</head>
<body>
	<h1>Update Data barang Tino Mastek</h1>
	<br>

	<form action="<?= APLIKASI;?>/barang/proses_tambah" method="post">


		Kode Barang: <input type="text" value="<?= $barang['kode'] ?>" name="kd_barang">
		<br>
		Nama Barang: <input type="text" value="<?= $barang['nama'] ?>" name="nm_barang">
		<br>
		Satuan: 

		<select name="kd_satuan">
			<option value="-">Pilih satuan...</option>

			<?php foreach($satuan as $baris_satuan): ?>
				<option value="<?= $baris_satuan['nama_satuan'];?>" >
					<?= $baris_satuan['nama_satuan'];?>
					
				</option>


			<?php endforeach ?>
		</select>

		<br>
		Harga Satuan: <input type="text" value="<?= $barang['harga_satuan'] ?>" name="hrg_satuan">

		<br><br> 

		<a href="<?= APLIKASI;?>/barang/index">Daftar Barang</a>
		<input type="submit" value="Simpan">
	</form>
</body>
</html>


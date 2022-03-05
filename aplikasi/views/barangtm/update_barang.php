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

	<form action="<?= APLIKASI;?>/barang/proses_update" method="post">

		<input type="text" value="<?= $data['barangnya_tinomastek']['id'] ?>" name="no_id" hidden>
		<br>

		Kode Barang: <input type="text" value="<?= $barang['kode_barang'] ?>" name="kd_barang">
		<br>
		Nama Barang: <input type="text" value="<?= $barang['nama_barang'] ?>" name="nm_barang">
		<br>
		Satuan: 

		<select name="kd_satuan">
			<?php foreach($satuan as $baris_satuan): ?>
				<option value="<?= $baris_satuan['nama_satuan'];?>" <?php if($baris_satuan['nama_satuan'] == $barang['satuan']) {echo "selected";} ?> >
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


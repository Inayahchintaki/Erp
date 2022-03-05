<!DOCTYPE html>
<html>
<head>
	<title>Hapus Data Barang</title>
</head>
<body>
	<h1>Hapus Data Barang Tino Mastek</h1>
	<br>

	<form action="<?= APLIKASI;?>/barang/proses_hapus" method="post">

		<input type="text" value="<?= $data['barangnya_tinomastek']['id'] ?>" name="no_id" hidden>
		<br>

		Kode Barang: <input type="text" readonly value="<?= $data['barangnya_tinomastek']['kode_barang'] ?>">
		<br>
		Nama Barang: <input type="text" readonly value="<?= $data['barangnya_tinomastek']['nama_barang'] ?>">
		<br>
		Satuan: <input type="text" readonly value="<?= $data['barangnya_tinomastek']['satuan'] ?>">
		<br>
		Harga Satuan: <input type="text" readonly value="<?= $data['barangnya_tinomastek']['harga_satuan'] ?>">

		<br><br> 

		<a href="<?= APLIKASI;?>/barang/index">Daftar Barang</a>
		<input type="submit" value="Hapus">
	</form>
</body>
</html>
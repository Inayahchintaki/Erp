<!DOCTYPE html>
<html>
<head>
	<title>Detail Barang</title>
</head>
<body>
	<h1>Data barang Tino Mastek</h1>
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
</body>
</html>
<?php

class barang_tinomastek
{

	private $data_saya = '';

	public function __construct()
	{
		$this->data_saya = new database;
	}

	public function ambil_semua_barang()
	{
		$sql = "SELECT * FROM tabel_barang";
		$this->data_saya->isi_sql($sql);

		return $this->data_saya->ambil_banyak_baris();
	}

	public function ambil_satu_barang($nomor_id)
	{
		$sql = "SELECT * FROM tabel_barang WHERE id= :x";
		$this->data_saya->isi_sql($sql);

		$this->data_saya->isi_parameter("x", $nomor_id);

		return $this->data_saya->ambil_satu_baris();
	}

	public function hapus_data($nomor_id)
	{
		$sql = "DELETE FROM tabel_barang WHERE id= :x";
		$this->data_saya->isi_sql($sql);

		$this->data_saya->isi_parameter("x", $nomor_id);

		$this->data_saya->jalankan_sql();

	}

	public function update_data($kiriman)
	{
		$sql = "UPDATE tabel_barang SET kode_barang= :a, nama_barang= :b, satuan= :c, harga_satuan= :d WHERE id= :x";

		$this->data_saya->isi_sql($sql);

		$this->data_saya->isi_parameter("a", $kiriman['kd_barang']);
		$this->data_saya->isi_parameter("b", $kiriman['nm_barang']);
		$this->data_saya->isi_parameter("c", $kiriman['kd_satuan']);
		$this->data_saya->isi_parameter("d", $kiriman['hrg_satuan']);

		$this->data_saya->isi_parameter("x", $kiriman['no_id']);

		$this->data_saya->jalankan_sql();
	}

	public function tambah_data($kiriman)
	{
		$sql = "INSERT INTO tabel_barang (kode_barang, nama_barang, satuan, harga_satuan) VALUES(:a, :b, :c, :d)";

		$this->data_saya->isi_sql($sql);

		$this->data_saya->isi_parameter('a', $kiriman['kd_barang']);
		$this->data_saya->isi_parameter('b', $kiriman['nm_barang']);
		$this->data_saya->isi_parameter('c', $kiriman['kd_satuan']);
		$this->data_saya->isi_parameter('d', $kiriman['hrg_satuan']);

		$this->data_saya->jalankan_sql();
	}
}

?>
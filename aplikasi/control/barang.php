<?php

class barang extends controller
{

	public function index ()
	{

		$hasil_select['barangnya_tinomastek'] = $this->gunakan_model("barang_tinomastek")->ambil_semua_barang();
	
	
		$this->tampilkan_view("barangtm/daftar_barang", $hasil_select);
	}

	public function detail($no_id = '')
	{
		$hasil_select['barangnya_tinomastek'] = $this->gunakan_model("barang_tinomastek")->ambil_satu_barang($no_id);

		$this->tampilkan_view("barangtm/detail_barang", $hasil_select);
	}

	public function proses_hapus()
	{
		$this->gunakan_model("barang_tinomastek")->hapus_data($_POST['no_id']);

		$this->index();
	}

	public function hapus($no_id = '')
	{
		$hasil_select['barangnya_tinomastek'] = $this->gunakan_model("barang_tinomastek")->ambil_satu_barang($no_id);

		$this->tampilkan_view("barangtm/hapus_barang", $hasil_select);
	}

	public function edit($no_id= '')
	{
		$hasil_select['barangnya_tinomastek'] = $this->gunakan_model("barang_tinomastek")->ambil_satu_barang($no_id);
		$hasil_select['satuan'] = $this->gunakan_model("satuan_tinomastek")->ambil_semua_satuan();

		$this->tampilkan_view("barangtm/update_barang", $hasil_select);	
	}

	public function proses_update($no_id= '')
	{
		//cetak_var($_POST);

		$this->gunakan_model('barang_tinomastek')->update_data($_POST);

		$this->index();
	}

	public function tambah()
	{
		$data_baru['barangnya_tinomastek'] = [
			'kode' => '',
			'nama' => '',
			'satuan' => '',
			'harga_satuan' => '',
		];

		$data_baru['satuan'] = $this->gunakan_model('satuan_tinomastek')->ambil_semua_satuan();

		$this->tampilkan_view("barangtm/tambah_barang", $data_baru);
	}

	public function proses_tambah()
	{
		$this->gunakan_model('barang_tinomastek')->tambah_data($_POST);
		$this->index();
	}

}

?>
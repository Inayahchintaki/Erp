<?php

class satuan_tinomastek
{
	private $data_saya = "";

	public function __construct()
	{
		$this->data_saya = new database;
	}

	public function ambil_semua_satuan()
	{
		$sql ="SELECT * FROM tabel_satuan";
		$this->data_saya->isi_sql($sql);

		return $this->data_saya->ambil_banyak_baris();
	}
}

?>
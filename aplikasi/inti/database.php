<?php

class database {
	private $nama_server = DB_NAMA_SERVER;
	private $nama_user =  DB_NAMA_USER;
	private $password_user = DB_PASSWORD_USER;
	private $nama_database = DB_NAMA_DATABASE;


	private $jembatan;
	private $kendaraan;

	public function __construct()
	{

		$identitas_koneksi = 'mysql:host='. $this->nama_server.';dbname='.$this->nama_database;

		$option = [
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		];

		 try {
		 	$this->jembatan = new PDO($identitas_koneksi,$this->nama_user,$this->password_user, $option);
		 } catch(PDOException $salahnya) {
		 	die($salahnya->getMessage);
		 }
	}



	public function isi_sql($perintah_sql)
	{

		$this->kendaraan = $this->jembatan->prepare($perintah_sql);
	}

	public function isi_parameter($param, $value, $type = null)
	{
		if(is_null($type))
		{
			switch (true)
			{
				case is_int($value) :
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value) :
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value) :
					$type = PDO::PARAM_NULL;
					break;
				default :
					$type = PDO::PARAM_STR;

			}
		}

		$this->kendaraan->bindValue($param, $value, $type);
	}


	public function jalankan_sql()
	{
		try
		{
			$this->kendaraan->execute();
		}
		catch(PDOException $kesalahan) {
			//die('Ini kesalahannya: '.$kesalahan->getMessage());
			die($this->tampilkan_error($kesalahan));
		}

	}


	public function tampilkan_error($data=[])
	{
		require_once 'aplikasi/inti/page_error.php';
	}


	public function jumlah_baris_efek()
	{
		return $this->kendaraan->rowCount();
	}

	public function ambil_banyak_baris()
	{


		$this->jalankan_sql();
		return $this->kendaraan->fetchAll(PDO::FETCH_ASSOC);
	}

	public function ambil_satu_baris()
	{
		// proses ini adalah proses kendaraan melaksanakan tugasnya sesuai dengan apa yang diperintahkan
		$this->jalankan_sql();
		return $this->kendaraan->fetch(PDO::FETCH_ASSOC);
	}



}



 ?>

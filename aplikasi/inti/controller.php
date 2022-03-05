<?php
class controller {


	public function tampilkan_view($file_view, $data=[])
	{
		require_once 'aplikasi/views/' . $file_view .'.php';
	}


	public function gunakan_model($nama_file_modal)
	{
		require_once 'aplikasi/model/' . $nama_file_modal .'.php';
		return new $nama_file_modal;
	}

}
?>

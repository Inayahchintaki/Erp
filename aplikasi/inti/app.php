<?php

Class aplikasiku {

	protected $controller = 'home';
	protected $method = 'index';
	protected $params = [];


	public function __construct()
	{

		
		$addx = $this->pecahADDX();

		if(isset($addx)) {
			if(file_exists('aplikasi/control/'.$addx[0].'.php'))
			{

				$this->controller = $addx[0];
				unset($addx[0]);
			}
		}



		require_once 'aplikasi/control/'.$this->controller.'.php';
		$this->controller = new $this->controller;



		if(isset($addx[1]))
		{
			if(method_exists($this->controller, $addx[1]))
			{
				$this->method = $addx[1];
				unset($addx[1]);
			}
		}



		if(!empty($addx))
		{
			$this->params = array_values($addx);

		}

		call_user_func_array([$this->controller,$this->method], $this->params);

	}

	public function pecahADDX()
	{

		if(isset($_GET['addx']))
		{
			$addx = rtrim($_GET['addx'],'/');

			$addx = filter_var($addx, FILTER_SANITIZE_URL);
			$addx = explode('/', $addx);
			return $addx;
		}
	}

}

 ?>

<?php

require 'controller.php';
require 'model.php';
require 'view.php';
require 'index.php';

class Controller_cart extends Controller
{

	function __construct()
	{
		$this->model = new Model_cart();
		$this->view = new View();
	}


	function action_index(){

		$d = $_POST['textOfCards'];
		var_dump($d);
		echo $d;
		$data = $this->model->get_data();
		var_dump($data);
		$this->view->generate('index.php', $data);
	}
}

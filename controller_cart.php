<?php

require_once 'controller.php';
class Controller_cart extends Controller
{

	function __construct()
	{
		$this->model = new Model_cart();
		$this->view = new View();
	}


	function action_index(){   // action_index() это общепринятое название?

		$d = $_POST['textOfCards']; // принимаю данные из индекс.пхп.
		var_dump($d);				// вар дамп не срабатывает, не могу понять почему метод не запускается.
		echo $d;
		$data = $this->model->get_data();
		var_dump($data);
		$this->view->generate('index.php', $data);
	}
}

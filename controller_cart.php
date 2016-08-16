<?php
require_once 'controller.php';
require_once 'view_cart.php';
require_once 'model_cart.php';
class Controller_cart extends Controller
{

	function __construct()
	{
		$this->model = new Model_cart();
		$this->view = new View_cart();
	}


	function action_index(){

		$d = $_POST['textOfCards'];
		echo $d;
		$data = $this->model->get_data($d);
		$this->view->generate(file_get_contents('front.html'), $data);
	}

}
$cartController = new Controller_cart ();
$cartController->action_index();
<?php
require_once 'controller.php';
require_once 'view_cart.php';
require_once 'model_cart.php';
require_once 'inputCheckCart.php';
class Controller_cart extends Controller
{

	function __construct()
	{
		$this->model = new Model_cart();
		$this->view = new View_cart();
		$this->inputCheck = new inputCheckCart();
	}

	function action_index(){
		$input = $this->inputCheck->Check();
		$data = $this->model->run($input);
		$this->view->generate(file_get_contents('front.html'), $data);
	}

}
$cartController = new Controller_cart ();
$cartController->action_index();
<?php
require_once 'application\views\viewCart.php';
require_once 'application\models\modelCart.php';
require_once 'application\inputCheck\inputCheckCart.php';

/**
 * Doc-блок здесь
 */
class ControllerCart extends Controller
{

	function __construct()
	{
		$this->model = new ModelCart();
		$this->view = new ViewCart();
		$this->inputCheck = new inputCheckCart();
	}

	function actionIndex()
	{
		 $input = $this->inputCheck->Check();
		if ($input == "error"){
			$data = 'Error';
			$this->view->generate(file_get_contents('application\template.html'), file_get_contents('application\cart.html'), $data);
		}
		else{
			$data = $this->model->run($input);
			$this->view->generate(file_get_contents('application\template.html'), file_get_contents('application\cart.html'), $data);
		}
	}

}
$cartController = new ControllerCart();
$cartController->actionIndex();
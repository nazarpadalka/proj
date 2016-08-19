<?php
require_once 'controller.php';
require_once 'viewCart.php';
require_once 'modelCart.php';
require_once 'inputCheckCart.php';

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

	function actionIndex(){
		if ($this->inputCheck->Check() == null){
			$data = 'Error';
			$this->view->generate(file_get_contents('front.html'), $data);
		}
		else{
			$input = $this->inputCheck->Check();
			$data = $this->model->run($input);
			$this->view->generate(file_get_contents('front.html'), $data);
		}
	}

}
$cartController = new ControllerCart();
$cartController->actionIndex();
<?php
class controllers_controllerCart extends core_Controller
{
	function __construct()
	{
		$this->model = new models_ModelCart();
		$this->view = new views_ViewCart();
		$this->validator = new validators_validatorCart();
	}

	function actionIndex()
	{
		$input = $this->validator->Check();
		if ($input == true){
			$data = 'Error';
		}
		else{
			$data = $this->model->run();
		}
		$this->view->generate(file_get_contents('application\template.php'), file_get_contents('application\cart.html'), $data);
	}
}

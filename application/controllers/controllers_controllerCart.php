<?php

/**
 * Class controllers_controllerCart
 */
class controllers_controllerCart extends core_controller
{
	/**
	 * controllers_controllerCart constructor.
     */
	function __construct()
	{
		$this->model = new models_ModelCart();
		$this->view = new views_ViewCart();
		$this->validator = new validators_validatorCart();
	}

	/**
	 *
     */
	function actionIndex()
	{
		$input = $this->validator->Check();
		if ($input == true){
			$data = 'Error';
		}
		else{
			$data = $this->model->run();
		}
		$this->view->generate('template.phtml', 'cart.html', $data);
	}
}

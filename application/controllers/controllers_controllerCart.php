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
		/** doc-block for each variable */ 
		$this->model = new models_ModelCart();
		$this->view = new views_ViewCart();
		$this->validator = new validators_validatorCart();
	}

	/**
	 * empty doc
     */
	function actionIndex()
	{
		$input = $this->validator->Check(); //not nessesary
		//declarate $data here
		if ($input == true){ //just if ($this->validator->Check())
			$data = 'Error';
		}
		else{
			$data = $this->model->run();
		}
		$this->view->generate('template.phtml', 'cart.html', $data);
	}
}

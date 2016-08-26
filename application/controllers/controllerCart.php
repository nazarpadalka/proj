<?php
require_once 'application\views\viewCart.php';
require_once 'application\models\modelCart.php';
require_once 'application\validators\validatorCart.php';
class ControllerCart extends Controller
{
	function __construct()
	{
		$this->model = new ModelCart(); //ты проинитил модель - а где она используется?
		$this->view = new ViewCart();
		$this->validator = new validatorCart();
	}

	function actionIndex()
	{
		$input = $this->validator->Check();
		if ($input == true){
			$data = 'Error';
		}
		else{
			$data = $this->model->run(); //  тута
		}
		$this->view->generate(file_get_contents('application\template.html'), file_get_contents('application\cart.html'), $data);
	}
}

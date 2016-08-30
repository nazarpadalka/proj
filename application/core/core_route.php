<?php
class core_route
{
	static function start()
	{
		$controllerName = 'main';
		$routes = $_GET['act'];
		if (!empty($routes)) {
			$controllerName = $routes;
		}
		$controllerClass = 'controllers_controller' . $controllerName;
		$controllerFile = $controllerClass  . '.php';
		require_once "application/controllers/" . $controllerFile;

		$cartController = new $controllerClass();
		$cartController->actionIndex();
	}
    
}

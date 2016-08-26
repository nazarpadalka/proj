<?php
class Route
{
	static function start()
	{
		$controllerName = 'main';
		$routes = $_GET['act'];
		if (!empty($routes)) {
			$controllerName = $routes;
		}
		$controllerClass = 'controller' . $controllerName;
		$controllerFile = $controllerClass  . '.php';
		include "application/controllers/" . $controllerFile;

		$cartController = new $controllerClass();
		$cartController->actionIndex();
	}
    
}

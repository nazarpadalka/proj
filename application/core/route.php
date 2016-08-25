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
		$controllerFile = 'controller' . $controllerName . '.php';
		include "application/controllers/" . $controllerFile;
	}
    
}

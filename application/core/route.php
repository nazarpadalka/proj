<?php
class Route
{
	static function start()
	{

		$controllerName = 'main';
		$routes = explode('/', $_SERVER['REQUEST_URI']);
		var_dump($routes);
		if (!empty($routes[1])) {
			$controllerName = $routes[1];
		}
		var_dump($controllerName);
		$controllerFile = 'controller' . $controllerName . '.php';

		include "application/controllers/" . $controllerFile;


	}
    
}

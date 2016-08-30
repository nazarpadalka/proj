<?php

spl_autoload_register(function ($class)
{
    $classname = $class;
    $class = explode("_", $class);
    require_once 'application/' .$class[0] . '/' . $classname . '.php';
});

require_once 'application/core/core_route.php';
core_Route::start();
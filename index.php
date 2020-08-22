<?php
define('SYSTEM_PATH',__DIR__);
require_once('config/connection.php');


$get_controller = empty($_GET['c']) ? 'Home' : $_GET['c'];
// echo $get_controller;
$get_action = empty($_GET['a']) ? 'Index' : $_GET['a'];

$controller = $get_controller .'Controller';
$path_controller = 'Controller/' .$controller .'.php';
if( ! file_exists($path_controller))
{
    die('File not found2');
}
require_once $path_controller;

if( ! class_exists($controller))
{
    die('Controller not exits');
}

$controllerObject = new $controller();
if( ! method_exists($controllerObject,$get_action))
{
    die('Method no ton tai');
}
$controllerObject ->{$get_action}();

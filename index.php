<?php
session_start();

function loadClass($class){
	if(strpos($class, 'Controller') !== FALSE){
	require 'controllers/' .$class .'.php';}

	if(strpos($class, 'Model') !== FALSE){
		require 'models/' .$class .'.php';}
}

spl_autoload_register('loadClass');

define('ROOT', str_replace('index.php', '',$_SERVER['SCRIPT_FILENAME']));

$params = explode('/', $_GET['action']);
if(isset($params[1])){
	$controller = $params[0] . "Controller";
	$method = $params[1];
	$oController = new $controller();

	if(method_exists($oController, $method)== TRUE){
		$oController->$method();
	}else{
		http_response_code(404);
		echo "Not found";
	}
} else{
	$oController = new LoginController;
	$oController->loginIndex();
}
<?php
session_start();

$uri = $_GET['uri'];
$controller = 'master';
$action = 'login';
$params = array();
$requestUri = explode("/",$uri);

if(!isset($_COOKIE['session'])){
    $action = 'index';

    if(count($requestUri) >= 1){

        $string = file_get_contents("configuration/configuration.json");
        $configuration = json_decode($string);

        foreach ($configuration as $currentController => $newSet) {

            if($currentController == $requestUri[0] && $newSet != ""){

                var_dump($currentController);
                $requestUri[0] = 'error';
                $action = 'error';
            }
            if($newSet == $requestUri[0]){

                $requestUri[0] = $currentController;
            }
        }

        $controllerChecker = "controllers\\".ucfirst($requestUri[0]). "Controller.php";

        if(file_exists($controllerChecker)){

            $controller = array_shift($requestUri);
            $actionchecker = array_shift($requestUri);
            $action = $actionchecker != null ? $actionchecker : 'index';
            $params = $requestUri;
        }
    }
}



$controllerName = "controllers\\".ucfirst($controller). "Controller";

spl_autoload_register(function($class){

    $controllerPath = $class.'.php';

    if(file_exists($controllerPath)){

        require_once $controllerPath;

    }
});

views\View::$actionName = $action;
views\View::$controllerName = $controller;


$loadedConroller = new $controllerName;

if(method_exists($loadedConroller,$action)){

    call_user_func_array(array($loadedConroller,$action),array($params));
}



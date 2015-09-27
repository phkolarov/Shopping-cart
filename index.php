<?php

define('DX_ROOT_DIR', dirname(__FILE__). '/');
define('DX_ROOT_PATH', basename(dirname(__FILE__)). '/');


$request = $_SERVER['REQUEST_URI'];
$request_home = '/'. DX_ROOT_PATH;

var_dump($request);
var_dump($_SERVER);

if(!empty($request)){

    var_dump(strpos($request, $request_home));
    if(0 === strpos($request, $request_home)){


        $request = substr($request,strlen($request_home));

        var_dump($request);
    }

}
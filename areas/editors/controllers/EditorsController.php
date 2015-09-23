<?php

namespace areas\editors\controllers;


use PDO;
use Exception;
use config\DatabaseConnect;
use viewModels\UserLoginViewModel;
use viewModels\LoginViewModel;
use repositories\Users;
use views\View;


class EditorController

{

    public function index()
    {


        var_dump("EDITOR!");
    }

}
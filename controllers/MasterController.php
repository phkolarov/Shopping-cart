<?php

namespace controllers;

use viewModels\UserLoginViewModel;
use viewModels\LoginViewModel;
use repositories\Users;
use views\View;


class MasterController extends BaseController
{

    protected function onInit(){
        View::$viewBag['VAR'] = "ASD";
    }

    public function index(){

        var_dump('MASTER CONTROLLER');

        $model = new UserLoginViewModel();
        return View::make($model);
    }


    public  function login(){

        var_dump("LOGIN");


        $model = new LoginViewModel();
        var_dump($model);

        return View::make($model);

    }

    public  function usersTest($params){


        $user = new Users();
        $model = $user->getAll();

        var_dump($model);
        return View::make($model);
    }
}
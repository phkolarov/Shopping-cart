<?php
/**
 * Created by PhpStorm.
 * User: Phill
 * Date: 9/30/2015
 * Time: 10:16 PM
 */

namespace controllers;



abstract class BaseController
{


    public function __construct(){

        $this->onInit();

    }


        protected function onInit(){
        }
}
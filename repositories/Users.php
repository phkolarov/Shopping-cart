<?php

namespace repositories;
use viewModels\UserEditViewModel;

/**
 * Created by PhpStorm.
 * User: Phill
 * Date: 10/1/2015
 * Time: 9:32 PM
 */
class Users
{

  private $users = [
      1=>[
          "name" => "Ivan",
          "email"=> "ivan@abv.bg"
      ],
      2 => [
          "name" => "norris",
          "email" => "norris@norris.norris"
      ],
      3 => [
          "name" => "pinko",
          "email" => "pinko@gmail.com"
      ]
  ];


    /**
     * @return UserEditViewModel[]
     */
    public function getAll(){

        $users = [];

        foreach($this->users as $id =>$userInfo){

            $users[] = new UserEditViewModel($id,$userInfo['name'],$userInfo['email']);
        }
        return $users;
    }


    public function getOne($id){

        $userInfo = $this->users[$id];

        return new UserEditViewModel($id,$userInfo['name'],$userInfo['email']);
    }

    public function getByName($name){

        $userInfo = array_filter($this->users,function($user) use ($name){
            return $user['name'] == $name;
        });

        $id = key($userInfo);
        $userInfo = array_shift(array_values($userInfo));

        return new UserEditViewModel($id,$userInfo['name'],$userInfo['email']);
    }
}
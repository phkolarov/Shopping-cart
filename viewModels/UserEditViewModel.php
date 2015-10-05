<?php
/**
 * Created by PhpStorm.
 * User: Phill
 * Date: 10/1/2015
 * Time: 9:42 PM
 */

namespace viewModels;


class UserEditViewModel
{


    private $id;
    private $name;
    private $email;

    public function __construct($id,$name,$email){

        $this->$id = $id;
        $this->$name = $name;
        $this->$email = $email;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getEmail($escape = true)
    {
        if($escape){
            return htmlspecialchars($this->email);
        }

            return $this->email;
        
    }

}
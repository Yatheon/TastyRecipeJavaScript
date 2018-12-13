<?php
/**
 * Created by PhpStorm.
 * User: Gusta
 * Date: 2018-12-13
 * Time: 12:12
 */

namespace TastyRecipe\Model;


class User implements \JsonSerializable
{
    private $username;
    private $password;
    private $loginStatus;


    public function __construct($opt_username = NULL, $opt_password = NULL){
        $this->username = $opt_username;
        $this->password = $opt_password;
        $this->loginStatus = false;
    }

    public function setUsername($username){
        $this->username = $username;
    }

    public function getUsername(){
        return $this->username;
    }

    public function setLoginStatus($loginStatus){
        $this->loginStatus = $loginStatus;
    }

    public function getLoginStatus(){
        return $this->loginStatus;
    }

    public function getPassword(){
        return $this->password;
    }
    public function jsonSerialize() {
        $json_obj = new \stdClass;
        $json_obj->username = \json_encode($this->username);
        $json_obj->loginStatus = \json_encode($this->loginStatus);
        return $json_obj;
    }

}
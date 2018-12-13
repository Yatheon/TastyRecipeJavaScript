<?php

namespace TastyRecipe\Model;
use \TastyRecipe\Integration\UserStore;

class UserHandler
{
    private $user;
    private $userDataBase;

    /**
     * UserHandler constructor.
     */
    public function __construct(){
        $this->user = new User();
        $this->userDataBase = new UserStore();
    }

    public function tryLogin($username, $password){
        $newUser = $this->userDataBase->getUser($username);
        if(($newUser->getPassword() == NULL) or !password_verify($password, $newUser->getPassword() )) {
            return false;
        }
        else{
            $this->user = $newUser;
            $this->user->setLoginStatus(true);
            return true;
        }
    }
    public function getUsername(){
        return $this->user->getUsername();
    }
    public function getLoginStatus(){
        return $this->user->getLoginStatus();
    }
    public function getUserStatus(){
        return $this->user;
    }
}
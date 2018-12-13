<?php

namespace TastyRecipe\Controller;
use TastyRecipe\Integration\CommentStore;
use TastyRecipe\Model\Comment;
use \TastyRecipe\Model\UserHandler;
use \TastyRecipe\Util\Util;
use TastyRecipe\Model\User;


class Controller
{

    private $commentStore;
    private $userHandler;

    /**
     * Controller constructor.
     */
    public function __construct(){
        $this->userHandler = new UserHandler();
        $this->commentStore = new CommentStore();
    }

    /**
     * Accepts Username and password and checks with database if it is a match
     * @param string $username
     * @param string $password
     * @return bool Returns true if successful login
     */
    public function tryLogin(string $username, string $password){
        return $this->userHandler->tryLogin($username, $password);
    }

    /**
     * @return Username if set, else NULL
     */
    public function getUsername(){
        return $this->userHandler->getUsername();
    }

    public function getLoginStatus(){
        return $this->userHandler->getLoginStatus();
    }
    public function getUserStatus(){
        return $this->userHandler->getUserStatus();
    }

    /**
     * Get comments for corresponding page specified in param
     * @param $fileDist Name of recipe page to get comment for
     * @return array of Comment
     */
    public function getComments($fileDist){
        return $this->commentStore->getComments($fileDist);
    }

    /**
     * Store comment in file specified by param
     * @param $fileDist Name of recipe page to store comment for
     * @param Comment $comment comment to be stored in form of class Comment
     */
    public function storeComment($fileDist, Comment $comment ){
        $this->commentStore->storeComment($fileDist, $comment);
    }

    /**
     * Deletes comment in file specified by param
     * @param $fileDist Name of page to delete comment from
     * @param $timestamp timestamp of comment to delete
     */
    public function deleteComment($fileDist, $timestamp){
        $this->commentStore->deleteComment($fileDist, $timestamp);
    }
}
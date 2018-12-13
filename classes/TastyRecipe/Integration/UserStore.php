<?php

namespace TastyRecipe\Integration;
use TastyRecipe\Model\User;

class UserStore
{
    const FILE_NAME = 'accounts.txt';
    const FILE_DIR = 'loginData/';
    const PATH_TO_ROOT = '/../../../';

    private $filepath;

    /**
     * UserStore constructor.
     */
    public function __construct()
    {
        $this->filepath = __DIR__ . self::PATH_TO_ROOT . self::FILE_DIR . self::FILE_NAME;
    }
    public function getUser($username){
        $file = $this->filepath;
        $accounts = explode("\n", file_get_contents($file));
        foreach ($accounts as $user) {
            $userData = explode("_", $user);
            $userData[1] = preg_replace('/\s+/', '', $userData[1]);
            if ($userData[0] == $username) {
                $user = new User($userData[0],$userData[1]);
                return $user;
            }
        }
        return NULL;
    }
}
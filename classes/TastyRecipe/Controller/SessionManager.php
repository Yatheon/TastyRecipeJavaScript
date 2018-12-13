<?php
/**
 * Created by PhpStorm.
 * UserHandler: Gusta
 * Date: 01/12/2018
 * Time: 15:53
 */

namespace TastyRecipe\Controller;
use \TastyRecipe\Controller\Controller;

class SessionManager{
    const CONTROLLER_KEY = 'controller';

    /**
     * @return returns Controller from session if stored, else return a new controller
     */
    public static function getController() {
        if (isset($_SESSION[self::CONTROLLER_KEY])) {
            return unserialize($_SESSION[self::CONTROLLER_KEY]);
        } else {
            return new Controller();
        }
    }

    /**
     * @param stores $controller in Session
     */
    public static function storeController(Controller $controller) {
        $_SESSION[self::CONTROLLER_KEY] = serialize($controller);
    }
}
<?php
namespace TastyRecipe\Util;

class Util
{
    const SYMBOL_PREFIX = 'KEY_';

    /**
     * Util constructor.
     */
    private function __construct() {

    }

    /**
     * Requires all files needed, starts new session and define constants
     */
    public static function initRequest(){
        spl_autoload_register(function ($class) {
            require_once 'classes/' . \str_replace('\\', '/', $class) . '.php';
        });
        session_start();
        self::defineConstants();
    }

    private static function defineConstants(){
        self::defineConstant('CMT', 'comment' );
        self::defineConstant('USER','username');
        self::defineConstant('TIMESTAMP', 'timestamp');
        self::defineConstant('VIEWS', 'resources/views/');
        self::defineConstant('FRAGMENTS', 'resources/fragments/');
        self::defineConstant('PASSWORD', 'password');
        self::defineConstant('COMMENT_DELIMITER', ";\n");
    }
    private static function defineConstant($param, $value){
        define(self::SYMBOL_PREFIX . $param, $value);
    }
}
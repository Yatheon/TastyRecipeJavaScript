<?php
namespace TastyRecipe\View;

use TastyRecipe\Controller\SessionManager;
use TastyRecipe\Util\Util;

require_once 'classes/TastyRecipe/Util/Util.php';
Util::initRequest();
$contr = SessionManager::getController();

if (empty($_POST[KEY_USER]) or empty($_POST[KEY_PASSWORD])
    or !ctype_print($_POST[KEY_USER]) or !ctype_print($_POST[KEY_PASSWORD]) ) {
    echo \json_encode(true);
}
else {
    $username = $_POST[KEY_USER];
    $password = $_POST[KEY_PASSWORD];
    echo \json_encode(!($contr->tryLogin($username, $password)));
}

SessionManager::storeController($contr);


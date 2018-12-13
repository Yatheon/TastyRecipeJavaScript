<?php
namespace TastyRecipe\View;

use TastyRecipe\Controller\SessionManager;
use TastyRecipe\Util\Util;
use \TastyRecipe\Model\Comment;


require_once 'classes/TastyRecipe/Util/Util.php';
Util::initRequest();
$contr = SessionManager::getController();
$loginStatus = $contr->getLoginStatus();
if (empty($_POST[KEY_CMT]) or !ctype_print($_POST[KEY_CMT]) or $loginStatus == false) {
    exit();
}
$username = $contr->getUsername();
$comment = new Comment($username, $_POST[KEY_CMT]);
$fileDist = $_POST['recipeID'];
$contr->storeComment($fileDist,$comment);

SessionManager::storeController($contr);
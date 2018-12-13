<?php
namespace TastyRecipe\View;

use TastyRecipe\Controller\SessionManager;
use TastyRecipe\Util\Util;

require_once 'classes/TastyRecipe/Util/Util.php';
Util::initRequest();
$contr = SessionManager::getController();

if (!empty($_POST[KEY_TIMESTAMP])) {
    $timestamp =(int) $_POST[KEY_TIMESTAMP];
    $fileDist = $_POST['recipeID'];
    $contr->deleteComment($fileDist, $timestamp);
}
SessionManager::storeController($contr);

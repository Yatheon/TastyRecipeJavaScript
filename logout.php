<?php
namespace TastyRecipe\View;

use TastyRecipe\Controller\SessionManager;
use TastyRecipe\Util\Util;

require_once 'classes/TastyRecipe/Util/Util.php';
Util::initRequest();
$_SESSION = array();

session_destroy();
$contr = SessionManager::getController();


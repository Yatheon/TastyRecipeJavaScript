<?php

use TastyRecipe\Util\Util;
use TastyRecipe\Controller\SessionManager;

require_once 'classes/TastyRecipe/Util/Util.php';
Util::initRequest();

$contr = SessionManager::getController();

echo \json_encode($contr->getUserStatus());
SessionManager::storeController($contr);


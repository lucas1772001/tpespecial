<?php

require_once 'libs/Router.php';
require_once 'CONTROLLER/apiProductsController.php';
$router = new Router();

$router->addRoute('producto/:ID', 'GET', 'apiProductsController', 'getProductById');
$router->addRoute('comentarios', 'GET', 'apiComentsController', 'getComents');
$router->addRoute('comentarios', 'POST', 'apiComentsController', 'insertComents');

$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);
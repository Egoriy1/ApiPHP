<?php

 ini_set('display_errors', 1);
 error_reporting(E_ALL);

 define('ROOT', dirname(__FILE__));
 require_once(ROOT.'/components/Router.php');
 require_once __DIR__ . '/vendor/autoload.php';


 $router = new Router();
 $router->run();
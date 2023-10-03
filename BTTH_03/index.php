<?php
require '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/config/config.php';
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'student';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

$controller = ucfirst($controller);
$controller = $controller . 'Controller';
$path = '/xampp/apache/modules/htdocs/CSE485_0923/BTTH_03/apps/controllers/' . $controller . '.php';
if (!file_exists($path)) {
  die('Request not found. Check your path');
}
include $path;
$myController = new $controller;
if (method_exists($myController, $action)) {
  $myController->$action();
} else {
  echo "Function $action not exists in $myController";
}
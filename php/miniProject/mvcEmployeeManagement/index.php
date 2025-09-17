<?php

require_once("config/database.php");
require_once("controllers/employeeController.php");

$action = isset($_GET["action"]) ? $_GET["action"] : '';

$controller = new EmployeeController;

switch($action){
  case 'create':
    $controller->create();
    break;
  case 'save':
    $controller = new EmployeeController;
    $controller->save();
    break;
  case 'edit':
    $controller = new EmployeeController;
    $controller->edit($_GET["id"]);
    break;
  case 'update':
    $controller = new EmployeeController;
    $controller->update($_GET["id"]);
    break;
  case 'delete':
    $controller = new EmployeeController;
    $controller->delete($_GET["id"]);
    break;
  default:
    $controller->index();
    break;
}

?>
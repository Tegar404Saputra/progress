<?php

require_once("models/employee.php");

class EmployeeController{
// Display employee list
public function index(){
  $employees = Employee::fetchAll();
  include("views/employees/index.php");
}

// Display Employee Add Form
public function create(){
  include("views/employees/create.php");
}

// Storing Employee Data
public function save(){
  $name = $_POST["name"];
  $address = $_POST["address"];
  $salary = $_POST["salary"];
  Employee::create($name, $address, $salary);
  
  header("Location: index.php");
}

// Display Form Edit
public function edit($id){
  $employee = Employee::findId($id);
  include("views/employees/update.php");
}

// Update Employee Data
public function update($id){
  $name = $_POST["name"];
  $address = $_POST["address"];
  $salary = $_POST["salary"];
  Employee::update($id, $name, $address, $salary);
  
  header("Location: index.php");
}

// Delete Employee
public function delete($id){
  Employee::delete($id);
  
  header("Location: index.php");
}
}

?>
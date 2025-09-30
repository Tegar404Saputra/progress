<?php

class Employee{
  // Fetch All Data
  public static function fetchAll(){
    global $pdo;
    $sql = "SELECT * FROM employees";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(pdo::FETCH_ASSOC);
  }
  
  // Find Id
  public static function findId($id){
    global $pdo;
    $sql = "SELECT * FROM employees WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }
  
  // Create
  public static function create($name, $address, $salary){
    global $pdo;
    $sql = "INSERT INTO employees (name,address,salary) VALUES (:name, :address, :salary)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'address' => $address, 'salary' => $salary]);
  }
  
  // Update
  public static function update($id, $name, $address, $salary){
    global $pdo;
    $sql = "UPDATE employees SET name = :name, address = :address, salary = :salary WHERE id =:id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['name' => $name, 'address' => $address, 'salary'=>$salary, 'id' =>$id]);
  }
  
  // Delete
  public static function delete($id){
    global $pdo;
    $sql = "DELETE FROM employees WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
  }
}

?>
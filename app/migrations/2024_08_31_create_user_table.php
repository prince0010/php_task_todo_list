<?php

function createUserTable($pdo)
{
      $sql = "CREATE TABLE users(id INT AUTO_INCREMENT PRIMARY KEY, 
      firstname VARCHAR(255) NOT NULL, 
      middlename VARCHAR(255) NOT NULL, 
      lastname VARCHAR(255) NOT NULL, 
      address VARCHAR(255) NOT NULL, 
      phone VARCHAR(255) NOT NULL, 
      email VARCHAR(255) NOT NULL UNIQUE, 
      password VARCHAR(128) NOT NULL, 
      created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
 try{
    $pdo->exec($sql);
    echo "User Table Created Successfully. ";
 }   
 catch(Exception $e)
 {
    echo "Error: ". $e->getMessage();
 }
}



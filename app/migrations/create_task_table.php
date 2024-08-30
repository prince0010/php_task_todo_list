<?php

$host = "localhost";
$dbname = "mvc_app";
$user = "root";
$pass = "";

try{

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user , $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE tasks(id INT AUTO_INCREMENT PRIMARY KEY, 
                               task_data varchar(255) NOT NULL,
                               status varchar(255) DEFAULT 'Not-Completed', 'Completed', 
                               created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                               user_id INT NOT NULL FOREIGN KEY REFERENCES users(id),
                               )";
 
    $pdo->exec($sql);
    echo "Task Table Created Successfully";    
}
catch(Exception $e)
{
    echo "Error: ". $e->getMessage();
}
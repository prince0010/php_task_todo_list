<?php

$host = 'localhost';
$dbname = 'mvc_app';
$user = 'root';
$pass = '';

try{

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sql = "CREATE TABLE users(id INT AUTO_INCREMENT PRIMARY KEY, 
                                firstname VARCHAR(255) NOT NULL, 
                                middlename VARCHAR(255) NOT NULL, 
                                lastname VARCHAR(255) NOT NULL, 
                                address VARCHAR(255) NOT NULL, 
                                phone VARCHAR(255) NOT NULL, 
                                username VARCHAR(255) NOT NULL UNIQUE, 
                                password VARCHAR(255) NOT NULL, 
                                create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
    $pdo->exec($sql);
    echo "Table created successfully";
}
catch(Exception $e)
{
    echo "Error: ". $e->getMessage();
}
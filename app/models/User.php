<?php

require_once __DIR__ . '/../migrations/migrations.php';

class User{

    private $pdo;

    public function __construct()
    {
        global $pdo;
        $this->pdo = $pdo; 
    }

    public function register($firstname, $middlename, $lastname, $email, $address, $phone, $password)
    {
        $stmt = $this->pdo->prepare("INSERT INTO users (firstname, middlename, lastname, address, phone, email, password) VALUES (?,?,?,?,?,?,?)");
        return $stmt->execute([$firstname, $middlename, $lastname, $address, $phone, $email, $password]);
    }

    // Making the email unique
    public function checkIfEmailExist($email){
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch() ? true : false;
    }
}
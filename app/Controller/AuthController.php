<?php

class AuthController
{

    public function index(){
        
    }


    public function register()
    {
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $middlename = $_POST['middlename'];
        $lastname = $_POST['lastname'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = new User();

        // $user->register($id, $firstname, $middlename, $lastname, $address, $phone, $email, $password);
        
    }

    public function login($email, $password)
    {
          
    }

    public function logout($uid)
    {

    }

}


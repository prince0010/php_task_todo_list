<?php

class AuthController
{

    public function index(){
        
    }


    public function register()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            
            // $id = $_POST['id'];

            $firstname = $_POST['firstname'];
            $middlename = $_POST['middlename'];
            $lastname = $_POST['lastname'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    
            $userModel = new User();
            
            if($userModel->checkIfEmailExist($email))
            {
                http_response_code(400);
                echo json_encode(['message' => 'Email Already Exist']);
                exit();
            }

            $userModel->register($firstname, $middlename, $lastname, $address, $phone, $email, $password);
            echo json_encode(['message' => 'Registration Successful']);
            exit();
                
        }

        include 'app/view/auth/register.view.php';

        // $user->register($id, $firstname, $middlename, $lastname, $address, $phone, $email, $password);
        
    }

    public function login($email, $password)
    {
          
    }

    public function logout($uid)
    {

    }

}


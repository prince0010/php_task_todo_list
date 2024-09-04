<?php

require_once '../app/Controller/AuthController.php';

// Debugging Output
error_log('Request Received: ' . $_SERVER['REQUEST_METHOD']);

$view = $_GET['view'] ?? 'register.view';
$action = $_POST['action'] ?? null;

$pageTitle = "Main Page Title";

error_log("Action: $action");
error_log("View: $view");

// Setup PDO. 
// So you can call the $host $dbname, $user, $pass from this folder because of the require called in the AuthController.php and the required call in the AuthController which is User.php from models and the User.php there is require called the migrations.php from migration folder that contains the $dbname, $host, $user, $pass variables.
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// switch($action)
// {
//     case 'register':
//         $authController = new AuthController();
//         $authController->register();
//         break;
//     case 'login':
//         $authController = new AuthController();
//         $authController->login();
//         break;

// }

if($action === 'register')
{
     // Handle POST request for registration
    $authController = new AuthController();
    $authController->register();
    exit(); // Exit after handling POST request to avoid loading the view
}

switch($view)
{
    case 'register.view':
        $pageTitle = "Register";
        $viewPath = '../app/view/auth/register.view.php';
        break;
    case 'login.view':
        $pageTitle = "Login";
        $viewPath = '../app/view/auth/login.view.php';
        break;
    default: 
        $pageTitle = "Register";
        $viewPath = '../app/view/auth/register.view.php';
        break;
}

include '../app/view/header.php';
include $viewPath;
include '../app/view/footer.view.php';
exit();

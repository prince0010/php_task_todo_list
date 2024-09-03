<?php

require_once '../app/Controller/AuthController.php';

// Debugging Output
error_log('Request Received: ' . $_SERVER['REQUEST_METHOD']);

$view = $_GET['view'] ?? 'register.view';
$action = $_POST['action'] ?? null;

$pageTitle = "Main Page Title";

error_log("Action: $action");
error_log("View: $view");
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

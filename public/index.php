<?php
$view = $_GET['view'] ?? 'register.view';

$pageTitle = "Main Page Title";

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

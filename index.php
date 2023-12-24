<?php
session_start();
include_once "controller/userController.php";


$userController = new UserController();

// if(isset($_GET['signin'])) {
//     include "view/signin.php";
// }


// if (isset($_POST['signup'])) {
//     extract($_POST);
//     $userController->signUpUsers($firstname, $lastname, $email, $password);
// }

// if (isset($_POST['signin'])) {
//     extract($_POST);
//     $userController->signinUsers($email, $password);
// }



if (isset($_POST['action'])) {
    $action = $_POST['action'];

    switch ($action) {
        case 'signup':
            extract($_POST);
            $userController->signUpUsers($firstname, $lastname, $email, $password);
            break;
        case 'signin':
            extract($_POST);
            $userController->signinUsers($email, $password);
            break;
        case 'updrole':
            $roleid = $_POST['role'];
            $userhid = $_POST['userhid'];
            $userController->updateRole($userhid, $roleid);
            break;
        case 'updateappr':
            $userupid = $_POST['idup'];
            extract($_POST);
            $userController->updateAppr($userupid, $firstname, $lastname, $email);
            break;
        default:
            // Default
            break;
    }
}


if (isset($_GET['action'])) {
    $get = $_GET['action'];
    switch ($get) {
        case 'allusers':
            $userController->listusers();
            break;
        case 'allappr':
            $userController->listappr(3);
            break;
        case 'allform':
            $userController->listappr(2);
            break;
        case 'signin':
            include "view/signin.php";
            break;
        case 'signup':
            include "view/signup.php";
            break;
        case 'logout':
            session_destroy();
            header("Location: index.php?action=signin");
            break;
        case 'delete':
            $idd = $_GET['id'];
            $userController->deleteUser($idd);
            break;
        default:
            echo "AHA!";
            break;
    }
}

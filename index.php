<?php
session_start();
include_once "controller/userController.php";
include_once "controller/classroomController.php";


$userController = new UserController();
$classroomController = new classroomController();




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
        case 'stats':
            $userController->getStats(3);
            break;
        case 'classrooms':
            $classroomController->classroom($_SESSION['id']);
            break;
        default:
            echo "AHA!";
            break;
    }
}

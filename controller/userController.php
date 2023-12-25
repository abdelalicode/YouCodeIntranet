<?php
include_once "model/userModel.php";

class UserController
{
    public $ObjUser;

    public  function __construct()
    {
        $this->ObjUser = new User();
    }



    public function listappr($idrole)
    {
        $apprenants = $this->ObjUser->getAllAppr($idrole);
        if ($idrole == 3 || $idrole == 2) {
            require_once "view/listappr.php";
        }
        // elseif($idrole == 2) {
        //     require_once "view/listappr.php";
        // } 
        // or header index?action=list;
        return $apprenants;
    }

    public function listusers()
    {
        $apprenants = $this->ObjUser->getAll();

        require_once "view/listusers.php";
        // or header index?action=list;
        return $apprenants;
    }

    public function listclassrooms()
    {
        $classes = $this->ObjUser->getClassrooms();
        
        require_once "view/listclassrooms.php";
        // or header index?action=list;
        return $classes;
    }


    public function checkUser($id)
    {
        if ($id == 1) {
            $this->listusers();
        } else if ($id == 2) {
            header("Location: index.php?action=classrooms");
        } else if ($id == 3) {
            $this->listclassrooms();
        } else {
            echo "Simple User";
        }
    }

    public function signUpUsers($firstname, $lastname, $email, $password)
    {
        $signUser = $this->ObjUser->createUser($firstname, $lastname, $email, $password);
        if ($signUser) {
            require_once "view/signin.php";
        } else {
            echo "<script>Alert(Can't Register)</script>";
            require_once "view/signup.php";
        }
    }

    public function signinUsers($email, $password)
    {
        $signUser = $this->ObjUser->signUser($email, $password);

        if ($signUser) {
            $_SESSION['id'] = $signUser['id'];
            $_SESSION['role_id'] = $signUser['role_id'];
            $_SESSION['firstname'] = $signUser['firstname'];
            $this->checkUser($_SESSION['role_id']);
        } else {
            echo "AHAA ACHRIF!";
        }
    }

    public function updateRole($userhid, $roleid)
    {
        $updrl = $this->ObjUser->updateUser($userhid, $roleid);
        if ($updrl) {
            header("Location: index.php?action=allusers");
        }
    }

    public function deleteUser($idd)
    {
        $del = $this->ObjUser->deleteUserM($idd);
        if ($del) {
            header("Location: index.php?action=allappr");
        }
    }

    public function updateAppr($userupid, $firstname, $lastname, $email)
    {
        $updrl = $this->ObjUser->updateAppr($userupid, $firstname, $lastname, $email);
        if ($updrl) {
            header("Location: index.php?action=allappr");
        }
    }

    public function getStats($idrole)
    {
        $counter = $this->ObjUser->stats($idrole);

        include_once "view/stats.php";
        return $counter;
    }
}

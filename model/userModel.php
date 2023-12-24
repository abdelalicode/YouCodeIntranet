<?php
include "database/database.php";

class User extends Db
{

    public function getAllAppr($idrole)
    {
        $sqlallappr = "SELECT * FROM users WHERE role_id = '$idrole'";
        return $this->connect()->query($sqlallappr)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAll()
    {
        $sqlallusers = "SELECT users.id, firstname, lastname, email, role.name FROM `users` JOIN role WHERE users.role_id = role.id AND role_id !=1 ;";
        return $this->connect()->query($sqlallusers)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createUser($firstname, $lastname, $email, $password)
    {
        $sqlsignup = "INSERT INTO users (firstname , lastname , email , password, role_id) VALUES ('$firstname', '$lastname', '$email', '$password', 0)";
        return $this->connect()->query($sqlsignup);
    }

    public function updateUser($userhid, $roleid)
    {
        $sqlupdrole = "UPDATE `users` SET `role_id`='$roleid' WHERE `id` = '$userhid'";
        return $this->connect()->query($sqlupdrole);
    }

    public function updateAppr($userupid, $firstname, $lastname, $email)
    {
        $sqlupdAppr = "UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email' WHERE `id`='$userupid'";
        return $this->connect()->query($sqlupdAppr);
    }

    public function signUser($email, $password)
    {
        $sqlsignin = "SELECT * FROM users WHERE email = ? AND password = ?";

        $stmt = $this->connect()->prepare($sqlsignin);

        $stmt->execute([$email, $password]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteUserM($idd)
    {   
        $sqldel = "DELETE FROM `users` WHERE `id` = $idd";
        return $this->connect()->query($sqldel);
    }
}

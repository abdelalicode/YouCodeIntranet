<?php
include_once "database/database.php";



class Classroom extends Db{


    public function getClassroom($myid){
        $sqlselclass = "SELECT name, level, start_year, end_year, city  FROM classroom JOIN users ON users.classroom_id = classroom.id JOIN campus ON classroom.campus_id = campus.id WHERE users.id = $myid";
        return $this->connect()->query($sqlselclass)->fetchAll(PDO::FETCH_ASSOC);
    }



}



?>
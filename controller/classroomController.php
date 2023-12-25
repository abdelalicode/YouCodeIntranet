<?php
include_once "model/classroom.php";

class classroomController 
{
    public $Objclassroom;

    public  function __construct()
    {
        $this->Objclassroom = new Classroom();
    }

    public function classroom($myid)
    {
        $classes = $this->Objclassroom->getClassroom($myid);
        require_once "view/showclassroom.php";
        return $classes;
    }
}


?>
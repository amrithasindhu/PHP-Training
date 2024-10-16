<?php


class User
{
    
    public $username ="Amritha Asok";
    public function Studentname()
    {
        echo $this->username;
        
    }
}

$student1 = new User();
$student1->Studentname();
?>
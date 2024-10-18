<?php

interface student 
{
    public function name($a);
    public function address($b);
    public function phonenumber($c);

}

class Commercestudent implements student
{


    public $name;
    public $address;
    public $phone;

    public function name($name)
    {
       return $this->name=$name;
    }
    public function address( $address )
    {
        return $this->address=$address;

    }
    public function phonenumber($phone)
    {
        return $this->phone=$phone;
    }
}
class sciencestudent implements student
{


    public $name;
    public $address;
    public $phone;

    public function name($name)
    {
       return $this->name=$name;
    }
    public function address( $address )
    {
        return $this->address=$address;

    }
    public function phonenumber($phone)
    {
        return $this->phone=$phone;
    }
}
class humanitiesstudent implements student
{


    public $name;
    public $address;
    public $phone;

    public function name($name)
    {
       return $this->name=$name."   ".  "is a gud student";
    }
    public function address( $address )
    {
        return $this->address=$address;

    }
    public function phonenumber($phone)
    {
        return $this->phone=$phone;
    }
}
$student1=new Commercestudent();
$student2=new sciencestudent();
$student3=new humanitiesstudent();
echo $student1->name("Amritha");
echo "<br>";
echo $student2->name("Athira");
echo "<br>";
echo $student3->name("Arya");



?>
<?php

interface student 
{
    public function name($a);
    public function address($b);
    public function phonenumber($c);

}



class Baseclass implements student {

    public $name;
    public $address;
    public $phone;

    public function name($name)
    {
       return $this->name=$name."   ".  "is a good student";
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

class Commercestudent extends Baseclass
{


    
}
class sciencestudent extends Baseclass
{


}
class humanitiesstudent extends Baseclass
{


}
$student5=new Baseclass();
$student1=new Commercestudent();
$student2=new sciencestudent();
$student3=new humanitiesstudent();
echo $student1->name("Amritha");
echo "<br>";
echo $student2->name("Athira");
echo "<br>";
echo $student3->name("Arya");



?>
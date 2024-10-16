<?php
class Employee
{


    public $name="	Amritha Asok";  

    protected $email="amrithaasok000@gmail.com";

    private $password="Amritha@123";

    public  function displayEmployeeInfo()
    {
        return $this->password;
    }
}

class Manager extends Employee{
    public $managername;
    public function displaymanagerInfo()
    {
        return $this->managername;
    } 

    public function displaypassword()
    {
        return $this->name;
    }
}

$emp1=new Employee();
// echo $emp1->displayEmployeeInfo();
 $manager1=new Manager();
 echo $manager1->displayEmployeeInfo();
?>
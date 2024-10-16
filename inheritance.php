<!-- <html>
    <head>
        <body>
            <h1>Inheritance</h1> -->

<?php

class User{


    Public $name; 
    Public $email; 
    public function __construct($name,$email)
    {
        $this->name=$name;
        $this->email=$email;

    }

    public function set_name($name)
    {
        $this->name=$name;
    }
    
    public function get_name()
    {
        return $this->name;
        
    }

}

class Adminuser extends User{

    Public $value; 
    public function __construct($name,$email,$value)
    
        
    {
        $this->value=$value;
    
    parent::__construct($name,$email);
    }
    
    
}


$user1 = new Adminuser("Amritha","amrithaasok000@gmail.com",20);
echo $user1->name;
echo $user1->email;
echo $user1->value;
?> 

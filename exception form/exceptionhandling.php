


<?php

// $a=55;
// try{
//      if ($a >10):
//         echo $a;
//      else:
//         throw new 
//         Exception("Enter number greater than 10");
//     endif;
// }

// catch(Exception $e)
// {
//     echo $e->getMessage();
// }

// finally
// {
//     echo "Finally";
// }

//  try{
// $a=10;
// $b=3;

// if ($b==0)
//     throw new Exception("Division by zernis not allowed");
// $ans=$a /$b;
// echo "Ans= $ans";

// }

// catch(Exception $e)
// {
//     echo $e->getMessage();

// }

// function checkNum($num)
// {
//     try {
//     if($num <1) 
//     throw new Exception("Enter number greater than 1");
//     echo $num;

// }
// catch(Exception $e)
// {
//     echo $e->getMessage();

// }
// }

// checkNum(5);


// class exceptionproblem  extends Exception
// {
//     public function Errormessage()
//     {

       
//         $errormsg= "Error on line ".$this->getLine().$this->getFile()."".$this->getMessage();
//         return $errormsg;
    
//     }
// }

// $email='amrithaasok';
//         try{
//             if(filter_var($email, FILTER_VALIDATE_EMAIL)==false)
//             {

//                 throw new exceptionproblem($email);
//         }
       
//     }
//     catch(exceptionproblem $e)
//     {
//         echo $e->Errormessage();
//     }





if($_SERVER['REQUEST_METHOD'] == 'POST')
{



$age=$_POST["age"];
$email=$_POST["email"];
$name=$_POST["name"];
}
class incorrectvalues extends Exception
{
    public function agecheck()
    {
        // $errormessage= '<br>'.'Error :'.$this->getline() .''.$this->getfile()."".$this->getMessage();
        // return $errormessage;

        $errormessage1='Enter the age between 0 and 120 .Also the age should be a number';
        return $errormessage1;

    }
    public function emailcheck()
    {
        // $errormessage= '<br>'.'Error :'.$this->getline() .''.$this->getfile()."".$this->getMessage();
        // return $errormessage;

        $errormessage2='Enter a valid emailid';
        return $errormessage2;

    }

    public function namecheck()
    {
        $errormessage3="Enter a valid name";
        return $errormessage3;
    }
}


try{
    if(!filter_var($age,FILTER_VALIDATE_INT,array("options"=>array("min_range" => 0,"max_range"=>120)))) 
    {
        throw new incorrectvalues($age);
    }

    echo  'The Age is '.$age;
    echo '<br>';
}
catch(incorrectvalues $e)
{
    echo $e->agecheck();
    echo '<br>';
}
try{
    if(filter_var($email,FILTER_VALIDATE_EMAIL)==false) 
    {
        throw new incorrectvalues($email);
    }
   
    echo 'The Email is ' .$email;
    echo '<br>';
}

catch(incorrectvalues $e)
{
    echo $e->emailcheck();
    echo '<br>';
}

try{
    $pattern="/^[a-zA-Z\s']+$/";
    if(!preg_match($pattern,$name))
    {
        throw new incorrectvalues($name);
    }
    echo 'The Name is '.$name;
  
}
catch(incorrectvalues $e)
{
    echo $e->namecheck();
}

?>



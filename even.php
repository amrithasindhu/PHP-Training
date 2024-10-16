<?php

if($_SERVER['REQUEST_METHOD'] == "POST") 

{
    $number=$_POST['number1'];
     function checkeven($number)
     {
        if($number % 2== 0){
           return "the number is even";
        }
        else{
            return "the number is odd";
     }

     


}

$result=checkeven($number);
echo($result);
}
?>
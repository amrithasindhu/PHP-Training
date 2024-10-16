<?php

include("dbcon.php");

if(isset($_POST['add_students']))
{

  $fnameerr=$lnameerr=$ageerr='';
  $fname=$lname=$age='';

  
if(empty($_POST['fname']))
{
  $fnameerr ="Enter the  first name";
   echo $fnameerr;
   echo "<br>";

}

else{
  $fname = htmlspecialchars(trim($_POST['fname']), ENT_QUOTES, 'UTF-8');

  
}

if(empty($_POST['lname']))
{
  $lnameerr ="Enter the  last name";
 
   echo $lnameerr;
   echo "<br>";

}

else{
  $lname = htmlspecialchars(trim($_POST['lname']), ENT_QUOTES, 'UTF-8');

  
}


if(empty($_POST['age']))
{
  $ageerr ="Enter the student Age"; 
   echo $ageerr;
   echo  "<br>";

}

else{
  $age=filter_var($_POST['age'],FILTER_VALIDATE_INT);

}


if(empty($fnameerr) &&empty($fnameerr) && empty($ageerr))
{
 $query="INSERT into `students`(`first_name`,`last_name`,`age`) values('$fname','$lname','$age')";
 $result=$connection->query($query);
 if(!$result)
 {
     die("query failed");
 }

 else{
     header('location:index.php ?insert_msg=Your data has been addedd');
 
}

}
}

?>
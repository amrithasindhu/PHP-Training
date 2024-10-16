<?php

include("database.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{

  $studentnameerr=$studentemailerr=$studentageerr=$studentclasserr='';
  $studentname=$studentemail=$studentage=$studentclass='';

  
if(empty($_POST['name']))
{
  $studentnameerr ="Enter the student name";
   echo $studentnameerr;

}

else{
  $studentname = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8');

  
}

if(empty($_POST['age']))
{
  $studentageerr ="Enter the student Age"; 
   echo $studentageerr;
   echo  "<br>";

}

else{
  $studentage=filter_var($_POST['age'],FILTER_VALIDATE_INT);

}

if(empty($_POST['class']))
{
  $studentclasserr ="Enter the student Class";
  

}

else{
  $studentclass=filter_var($_POST['class'],FILTER_VALIDATE_INT);


}
if(empty($_POST['email']))
{
  $studentemailerr ="Enter the student mail id";


}

else{
  $studentemail=filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);

}
$query="INSERT INTO student_tb VALUES ('$studentname','$studentage','$studentclass','$studentemail')";
  mysqli_query($conn, $query);

  echo "<script> alert('Data Inserted Successfully'); </script>";
if(empty($studentnameerr) &&empty($studentageerr) && empty($studentclasserr)&&empty($studentemailerr))
{
  echo"Form Submitted Successfully";
  echo"<br>";
  echo"<br>";
  echo "Student Name  :".$studentname."<br>". "Student Age  :".$studentage."<br>". "Student Class  :".$studentclass."<br>". "Student mail id   : ".$studentemail."<br>";
}

}

?>
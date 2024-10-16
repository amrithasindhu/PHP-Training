<?php

if($_SERVER['REQUEST_METHOD']=="POST")
{
  $names=$_POST['name'];
  $age=$_POST['age'];
  $class=$_POST['class'];
  $email=$_POST['email'];

try{
      require_once "dbh.inc.php";
      $database = new Database(); 
        $pdo = $database->connect(); 

$query="INSERT INTO student ( name,age,class,email) VALUES (:names,:age,:class,:email);";
$stmt =$pdo->prepare($query);

$stmt->bindParam(":names", $names) ;
$stmt->bindParam(":age", $age) ;
$stmt->bindParam(":class", $class) ;
$stmt->bindParam(":email", $email) ;
$stmt->execute();
$pdo=null;
$stmt=null ;
header("Location : ../index.php");
die();
  
}
catch (PDOException $e){
    die('Query Failed'. $e->getMessage());
}
}
else{
    header("Location : ../index.php");
}
?>
<?php

$_SERVER["REQUEST_METHOD"] = "POST";
$usernameerr=$emailerr="";
$username=$email="";

if(empty($_POST["username"]))
{
    $usernameerr='User name is required'.'<br>';
    echo $usernameerr;
}
else{
    $username=htmlspecialchars(trim($_POST['username']));
   
}

if(empty($_POST["email"]))
{
    $emailerr='Email is required'.'<br>';
    echo $emailerr;
}
else{
    $email=htmlspecialchars(trim($_POST['email']));
     if(!filter_var($email, FILTER_VALIDATE_EMAIL))
     echo "Enter correct email";
}

if(empty($usernameerr) && empty($emailerr))
{
    echo"Form Submitted";
    echo "<br>";
    echo "Username : " .$username ."<br>". "Email :" .$email;
}


?>
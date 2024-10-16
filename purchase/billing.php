<?php
$_SERVER['REQUEST_METHOD']='POST';

$usernameerr=$emailerr=$phoneerr=$hobbieserr=$gendererr='';
$username=$email=$phone=$gendererr='';
$hobbies=[];

if(empty($_POST['name']))
{
    $usernameerr="Enter the username";
    echo $usernameerr;
}

else
{
    $username=$_POST["name"];
}

if(empty($_POST['email']))
{
    $emailerr= 'Enter the email';
    echo $emailerr;
  
}

else
{
 
    $email=htmlspecialchars(trim($_POST['email']));
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "Invalid email format";
    }
}

if(empty($_POST['phone']))
{
    $phoneerr="Enter the PhoneNumber";
    echo $phoneerr;
}

else
{
    $phone=htmlspecialchars(trim($_POST["phone"]));
}

if(empty($_POST['hobbies']))
{
    $hobbieserr= 'Select at least one hobby';
    echo $hobbieserr;
  
}

else
{
 
    $hobbies = $_POST['hobbies']; 
    
}



if(empty($_POST['gender']))
{
    $gendererr="Select your gender";
    echo $gendererr;
}

else
{
    $gender=$_POST['gender'];
}

if(empty($usernameerr)&&empty($emailerr)&&empty($phoneerr)&& empty($hobbieserr))
{
    echo'The form submitted successfully';
    echo'<br>';
    echo "Username: " . $username . '<br>' . "Email: " . $email . '<br>' . "Phone Number: " . $phone . '<br>' . "Hobbies: " . implode(', ', $hobbies) . '<br>' .'GENDER : ' .$gender;
}
?>
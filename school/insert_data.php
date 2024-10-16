<?php


require_once("student.php"); 

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['add_students'])) {

    $studentnameerr = $studentemailerr = $studentageerr = $studentclasserr = '';
    $studentname = $studentemail = $studentage = $studentclass = '';


    $isValid = true;

    
    if (empty($_POST['name']))  {
        $studentnameerr = "Enter the student's name";
        $isValid = false;
    } else {
        $name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8');
     
        $studentname = $name ;
    }

    if (empty($_POST['age'])) {
        $studentageerr = "Enter the student's age.";
        $isValid = false;
    } else {
        $studentage = filter_var($_POST['age'], FILTER_VALIDATE_INT);
        if ($studentage === false || $studentage <= 0) {
            $studentageerr = "Enter a valid age.";
            $isValid = false;
        }
    }

    if (empty($_POST['class'])) {
        $studentclasserr = "Enter the student's class.";
        $isValid = false;
    } else {
        $studentclass = htmlspecialchars(trim($_POST['class']), ENT_QUOTES, 'UTF-8');
    }

    if (empty($_POST['email'])) {
        $studentemailerr = "Enter the student's email.";
        $isValid = false;
    } else {
        $studentemail = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
        if ($studentemail === false) {
            $studentemailerr = "Enter a valid email address.";
            $isValid = false;
        }
    }

    if ($isValid) {
        $studentObj = new Student($studentname, $studentage, $studentclass, $studentemail);
        if ($studentObj->addStudent()) {
            header("Location: index.php?success=1");
            exit();
        } else {
            header("Location: index.php?error=1");
            exit();
        }
    } else {
       
        header("Location: index.php?error=1");
        exit();
    }
} else {
   
    header("Location: index.php");
    exit();
}
?>

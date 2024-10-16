
<html>
    <head>
        <title>
            Student Registration Form
        </title>
        <body>
            <h1>Student Registration Form</h1>
            <form action="validation.php" method="POST">
                <input type="text" name="name"  placeholder="Enter the student Name">
                <input type="number" name="age" placeholder="Enter the Age">
                <input type="number" name="class"placeholder="Enter the Class">
                <input type="email" name="email" placeholder="Enter the email id">
                <input type="submit" value="Submit form">
            </form>
            <br>
    <form action="fetch.php" method="GET">
        <input type="submit" value="Student List">
    </form>
        </body>
    </head>
</html>

<?php

include("database.php");
?>
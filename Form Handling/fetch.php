<?php
require_once("database.php");

$query = "SELECT * FROM student_tb";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Data from Database</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body class="background">
    <div class="container">
        <h2>Student Details</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Class</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php 
            
                while($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['Age']; ?></td>
                    <td><?php echo $row['Class']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

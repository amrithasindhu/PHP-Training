<?php

include("dbcon.php");
include("footer.php");

if(isset($_GET["id"])) {
    $id = intval($_GET["id"]); 
    $query = "DELETE FROM `students` WHERE `id` = :id"; 
    $stmt = $connection->prepare($query); 
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    $result = $stmt->execute(); 

    if(!$result) {
        die("Query failed");
    } else {
        header("Location: index.php?delete_msg=deleted"); 
        exit(); 
    }
} else {
    die("No ID provided.");
}
?>

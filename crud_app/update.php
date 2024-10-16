<?php
include("header.php");
include("dbcon.php");

if (isset($_GET["id"])) {
    $id = intval($_GET["id"]); 
} else {
    die("No ID provided.");
}

$query = "SELECT * FROM `students` WHERE `id` = :id";
$stmt = $connection->prepare($query);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$row) {
    die("No student found with ID: " . $id);
}


if (isset($_POST["update_students"])) {
    $firstname = htmlspecialchars(trim($_POST['fname']), ENT_QUOTES, 'UTF-8');
    $lastname = htmlspecialchars(trim($_POST['lname']), ENT_QUOTES, 'UTF-8');
    $studentage = filter_var($_POST['age'], FILTER_VALIDATE_INT);

    if (!empty($firstname) && !empty($lastname) && !empty($studentage)) {
        $query = "UPDATE `students` SET `first_name` = :firstname, `last_name` = :lastname, `age` = :age WHERE `id` = :id";
        $stmt = $connection->prepare($query);
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':age', $studentage);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            header('Location: index.php?update_msg=updated');
            exit();
        } else {
            die("Update query failed.");
        }
    } else {
        echo "Please fill all fields.";
    }
}
?>

<form action="?id=<?php echo $id; ?>" method="post">
    <div class="container">
        <h2>Update Student Information</h2>
        
        <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" name="fname" placeholder="First Name" class="form-control" value="<?php echo htmlspecialchars($row['first_name']); ?>" required>
        </div>

        <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" name="lname" placeholder="Last Name" class="form-control" value="<?php echo htmlspecialchars($row['last_name']); ?>" required>
        </div>

        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" name="age" placeholder="Age" class="form-control" value="<?php echo htmlspecialchars($row['age']); ?>" required>
        </div>

        <input type="submit" class="btn btn-success" name="update_students" value="Update">
    </div>
</form>

<?php
include("footer.php");
?>

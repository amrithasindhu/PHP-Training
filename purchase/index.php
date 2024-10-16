<!DOCTYPE html>
<head>
    <title>
        Purchase Form
    </title>
</head>
<body>
    <h1>Purchase Registration Form</h1>
</body>
<form  action="billing.php" method="POST">
    <input type="text" name="name" placeholder="Enter the name">
    <input type="text" name="email" placeholder="Enter the email id">
    <input type="number" name="phone" placeholder="Enter the Mobile Number"><br>
    <input type="checkbox" name="hobbies[]" value="Reading">Reading<br>
    <input type="checkbox" name="hobbies[]" value="Dancing">Dancing<br>
    <input type="checkbox" name="hobbies[]" value="Singing">Singing<br>
    <input type="radio" name="gender" value="Female">Female<br>
    <input type="radio" name="gender" value="male">Male<br>

    <input type="submit">
</form>
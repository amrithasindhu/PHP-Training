<?php
 $username=htmlspecialchars(trim($_POST["username"]));
 $password=htmlspecialchars(trim($_POST["password"]));
 echo htmlspecialchars($username).'<br>';
 echo $password.'<br>';

?>
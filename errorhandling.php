
<html>
<body>
<?php

error_reporting();
ini_set("display_errors",0);

function ErrorHandler($errno,$errstr,$errfile ,$errline)
{
   $errormessage = "Error :[$errno] $errstr - $errfile:$errline ";
   error_log($errormessage.PHP_EOL,3,"error_log.txt");
}

set_error_handler("ErrorHandler");
echo $studentname;


?>
</body>
</html>
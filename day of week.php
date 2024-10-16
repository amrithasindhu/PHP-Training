<html>
    <body>
        <h1>Week</h1>

    </body>
    <form method ="POST">

    <input type="Number" name="num" placeholder="Day of the week">
   
    <input type="submit" value="calculate">
    <?php
    $number=$_POST["num"];

    $result=Null;
    switch($number)
    {
        case "0":
            $result= "Sunday";
            break;
        case "1":
            $result= "Monday";
            break;
        case "2":
            $result= "Tuesday";
            break;
        case "3":
            $result= "Wednesday";
            break;
        case "4":
            $result= "Thursday";
           break;
        case "5":
            $result= "Friday";
            break;
        case "6":
            $result= "Saturday";
            break;
        default:
        $result= "Invalid Options";
    }
    echo $result ."<br>"
  
    ?>
</html>
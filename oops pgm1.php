<html>
<head>
    <title>
        Area
    </title>
    <body>
        <h1>Area</h1>
        <form action="" method="POST">
            <input name="length" type="number" placeholder="Enter the length">
            <input name="breadth" type="number" placeholder="Enter the breadth">
            <input type="submit" name="submit" value="Calculate">
        </form>
    
</head>






<?php

class Rectangle 


{
    public $length;
    public $breadth;
    public $area;

    public function area($l,$b)
    {
        return $this->area=$l *$b;
    }

    
}

if($_SERVER['REQUEST_METHOD']== 'POST')
{
    $length=(int)$_POST['length'];
    $breadth=(int)$_POST['breadth'];

$area1=new Rectangle();
echo "The Area of the Rectangle is :". $area1->area($length,$breadth);
}


?>
</body>
</html>
<html>
    <head>
    <title>Circle Area and Circumference</title>
    </head>
    <body>
        <h1> Circle</h1>
        <form action="" method="POST">
            <input name="radius" type="number" placeholder="Enter the radius">
            <input type="submit" value="calculate">

        </form>

<?php

class Circle
{

    public $radius;
    public $area;
    public $circumference;
    public function area($r)
    {
        return $this->area=3.14*($r*$r);
    }

    public function circumference($r)
    {
        return $this->circumference=2*3.14*$r;
    }
}

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $radius=(float)$_POST['radius'];

$area1=new Circle();
echo "The area of the circle is ".$area1->area($radius);
}
?>
    </body>
    
</html>
<?php

abstract class shape
{
    abstract public function calculateArea($a,$b);

}

class Triangle extends shape{

   
    public function calculateArea($b,$h)
    {
        return $area=0.5*($b*$h);
    }

}

class Rectangle extends shape{


    public function calculateArea($l,$b)
    {
        return $areatraingle= ($b*$l);
    }
}

$area1 = new Triangle();
$area2 = new Rectangle();
echo "The area of rectangle"."  ".$area2->calculateArea(7,6);
echo "<br>";
echo "The area of traingle"."  ".$area1->calculateArea(5,10);

?>
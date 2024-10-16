<?php
interface Resizable {



    public function resize($a,$b);
} 


class Square implements Resizable
{


    public $side;
    public function resize($side,$p)
    {
     return $shape=$side*($p/100);
    }
}

$resize1=new Square();
echo "the resize is".$resize1->resize(5,20);
?>
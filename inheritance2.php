
<?php

class  Staff
{

    private $num1;
    private $num2;
    private $c;
    
    public function add($a,$b)
    {
        $this->num1=$a;
        $this->num2=$b;
        $this->c=$a+$b;

    }

    public function result()
    {
        return $this->c;
    }
}

class Manager extends Staff{
    private $number1;
    private $number2;
    private $subvalue;
    public function sub($x,$y)
    {
        $this->number1=$x;
        $this->number2=$y;
        $this->subvalue=$x-$y;
        return $this->subvalue;
       
        
    }
    public function subresult()
    {
        return $this->subvalue;
    }
}

$results= new Staff();
$results->add("5","2");
echo $results->result();
echo '<br>';


$manage= new Manager();
$manage->add("9","2");
echo $manage->result();
echo"<br>";
$manage->sub("30","2");
echo $manage->subresult();
?>
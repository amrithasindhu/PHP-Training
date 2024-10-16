<?php

abstract class operator
{
 public $num1;
 public $num2;
 public $result;


abstract public function add($a,$b);

abstract public function sub($a,$b);

}

class calculate extends operator
{
    public function add($a,$b)
    {
        $this->num1 = $a;
        $this->num2 = $b;
         return $this->result = $a+$b;
    }
    public function sub($a,$b)
    {
        $this->num1 = $a;
        $this->num2 = $b;
        return $this->result = $a-$b;
    }
}

$value1=new calculate();
echo $value1->add("5","3");
echo "<br>";
echo $value1->sub("5","3");

?>
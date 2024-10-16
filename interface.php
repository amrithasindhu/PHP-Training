<?php
interface operable
{
    public function add(int $a,int $b);
    public function sub(int $a,int $b);
}

interface operations
{
    public function div(float $a,float $b);

}

class Arithmetic implements operable,operations
{
    public function add (int $a,int $b)
    {
        return $a + $b;
    }

    public function sub(int $a,int $b)
    {
        return $a-$b;
    }

    public function div(float $a,float $b)
    {
        return $a/$b;
    }
}
$operations = new Arithmetic();
echo $operations->add(5,2);
echo "<br>";
echo $operations->sub(5,2);
echo "<br>";
echo $operations->div(10,2);


?>
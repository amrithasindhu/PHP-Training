<?php

class vehicle
{
    private $brand;
    private $model;
    private  $year;

    public function Display($brand,$model,$year)
    {
        $this->brand=$brand;
        $this->model=$model;
        $this->year=$year;
    }

    public function Show()
    {
        return $this->brand."   ". $this->year."   ".$this->model;
    }
}

$vehicle1=new vehicle();
$vehicle1->Display("bmw",70,2029);
echo $vehicle1->Show();

?>

<?php

class Fruits
{

    public $name;
    public $color;
    public function __construct($name,$color)
    {
        $this->name = $name;
        $this->color=$color;
    }

    public function get_name()
{
    return $this->name;
}

    public function get_color()
    {
        return $this->color;
    }
}

$apple = new Fruits("apple","red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();

?>


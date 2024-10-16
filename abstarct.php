<?php

abstract class Element
{
    abstract public function remind() : string;
    
}

class water extends Element
{

    private $message="Be Happy";

    public function remind() : string
    { 
        return get_class( $this ) ."   ".get_parent_class( $this ) ."" .$this->message;
    }
}

class Fire extends Element
{

    private $message="Be Happy";
    public function remind() : string
    { 
        return get_class( $this ) ."   ".get_parent_class( $this ) ."".$this->message;
    }
}

class Air extends Element



{

    private $message="Be Happy";
    public function remind() : string
    { 
        return get_class( $this ) ."   ".get_parent_class( $this ) ."" .$this->message;
    }
}

$element1= new water();
 echo $element1->remind();
 echo "<BR>";
 $element2= new Fire();
 echo $element2->remind();
 echo "<BR>";
 $element3= new water();
 echo $element3->remind();
 echo "<BR>";
 $element4= new water();
 echo $element4->remind();
?>
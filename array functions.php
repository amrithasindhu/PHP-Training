<?php

$fruits=["Apple",'Orange','Banana'];
$veggies=['Cabbage','spinache','Carrot'];
 echo count($fruits).'<BR>';
 array_push($fruits,'pineapple').'<BR>';
 print_r($fruits);
 echo '<br>'; 
 array_pop($fruits);
 print_r($fruits);
 echo'<br>';
 $numbers=[2,8,1,0];
 sort($numbers);
 print_r($numbers);
 echo'<br>';


 $sliced=array_slice($numbers,1,1);
print_r($sliced);
?>
<?php

$str="Hello Amritha";
echo strlen($str) .'<br>';
echo strtoupper($str).'<br>';
echo strtolower($str).'<br>';
$new=strpos($str,'r');
echo $new .'<br>';
$new_string=str_replace('Amritha','PHP',$str);
echo $new_string .'<br>';

?>

//Print numbers upto 10

<?php
for($i=0;$i<=10;$i++)

    echo $i .'<br>';
?>

//print odd numbers

<?php

for($i=0;$i<=10;$i++)
{
    if($i%2!=0)
    
    echo $i .'<br>';
}
?>
//print odd numbers using while 
<?php
$i = 1;
while ($i <= 10) {
    if ($i % 2 != 0) {
        echo "<br>";
        echo $i . "<br>"; 
    }
    $i++; 
}
?>

//for each loop




<?php
echo"<br>";
$fruits=array('apple','banana','grape');
foreach($fruits as $x)
 echo $x ."<br>";
?>


<?php
$fruits=array("apple"=>"red","banana"=>"yellow","orange"=>"orange");
foreach($fruits  as $x=>$y)
{


echo "$x:$y <br>";
}
?>


//Function

<?php
function sum($a,$b)
{
    $c=$a + $b;
    return $c;
}

echo "sum of a and b" .sum(5,7)
?>

//array

<?php
echo "<br>";
$fruits=array("orange","apple","grape");
echo $fruits[2] ."<br>";
?>


<?php
$fruits=array("name"=>"apple","color"=> "red","Type"=> "fruit");
foreach($fruits as $x)
{
    echo "$x:$y <br>";
}
?>

Multidimensional Array
<?php

$fruits=[

["name"=>"	orange","color"=> "orange","price"=> "200"],
["name"=>"	apple","color"=> "red","price"=> "400"],
["name"=>"	banana","color"=> "yellow","price"=> "100"]
];


function totalcost($fruits)
{


    $total=0;
    foreach($fruits as $x)  {
    
        $total += $x['price'];
    }
    return $total;
}


$cost=totalcost($fruits);

echo  "Total cost is" .$cost;

?>
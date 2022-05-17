<?php
declare(strict_types=1);
echo 'hi mina';
$name="mina";
$age=20;
$weight = 75 ;
echo "<br>";
echo  $age + $weight;

$arr = array('a' =>'mina' , 'b'=> 'ma');
$arr2 = array('ali' , 'sahar');
print_r($arr);

print_r($arr + $arr2);

echo "<br>";
echo pi();
echo "<br>";
echo min(10 , 20 , 50 , 3);
echo max(10 , 20 , 50 , 3);
echo abs(-50);
echo sqrt(81);
echo "<br>";
echo round(0.49990);
echo "<br>";
echo rand(1 , 10);

function mina(int $x){
    return $x + 10 ;
}

echo mina(20);



echo "<br>";
function sum($x):int{
    return $x+=10;
}

$num=10;
sum($num);

echo $num ;
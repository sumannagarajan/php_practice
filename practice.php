<?php
#types
// $value = null;
// echo "$value";
// $a=true;
// if($a)
// {
//     echo "yes a is true\n";
// }
//integers


$b=0o123; //it will print octal value---->equal to some specify decimal value
echo ($b);
echo "<br>";
$c=123409924098;  //it will print decimal value
echo ($c);
echo "<br>";
$d=0b111100010101010;
echo $d;
echo "<br>";
//casting-------> one type to another data type
$x=10;
$x=(float)$x;
echo $x;
var_dump($x);
//strings

echo 'this is simple string \n'; //-------->single quoted /slash is treat as litreals
echo "<br>";
echo "this is sample string in dubbule quate\n";//dubble quate /slash is treat as escape squence
echo "<br>";
// numeric in strings
$m=1+"10 hello";
echo $m;

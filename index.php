<?php
$x = 10;
$y = "Hello";
$y = true;
echo $x."Hello the gioi";
$arr = [];
$arr[0] = 19;
$arr[] = 28;
echo $arr[1];
$arr["name"] = "Nguyen Van An";
echo $arr["name"];

foreach($arr as $a){
    echo $a;
}
function tinhTong($a,$b){
    return $a + $b;
}
echo tinhTong(5, 7);

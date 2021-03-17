<?php
$array = [11, 2, 8, 10, 5, 99, 1, 8, 9];

$length = count($array)/3;
$newarray = [];
$cont =0;
for($i = 0; $i < $length; $i++) {
   echo $array[$i] . "-" . $array[$length + $i]   . '-' . $array[2*$length + $i] . '-';
}
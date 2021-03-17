<?php
$array = [1, 5, 4, 7, 9, 0, -10, 13, 93, 14, 15];

rsort($array);
$sub = abs($array[0] - $array[1]);
for($i = 0; $i < count($array) - 1; $i++) {
    if ($sub > abs($array[$i] - $array[$i+1])) {
        $sub = abs($array[$i] - $array[$i+1]);
    }
}
for ($i = 0; $i < count($array) - 1; $i++) {
    if ($sub == abs($array[$i] - $array[$i+1])) {
        echo $array[$i] . '-' . $array[$i+1] . "   ";
    }
}

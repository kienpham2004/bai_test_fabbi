<?php
$arr = array(0, 100, -4, 8, 143, 5, 99, 100);
$lenght = count($arr);
function kiemtra($arr, $lenght){
    $sum = 0;
    for($i = 0; $i < $lenght - 1; $i++){
        for($j = $i + 1; $j < $lenght; $j++){
            if($sum < $arr[$i] + $arr[$j]){
                $sum = $arr[$i] + $arr[$j];
            }
        }
    }

    return $sum;
}

echo kiemtra($arr, $lenght);
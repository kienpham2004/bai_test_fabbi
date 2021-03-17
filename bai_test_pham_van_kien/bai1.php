<?php
$arr = [11, 2, 8, 10, 5, 99, 1, 8, 9];

function check($arr, $n){
    while($n % 3 == 0){
        for($i = 0; $i < count($arr); $i++){
            for($j = $i + $n; $j < $i; $j+=$n){
                if($i < $j){
                    $tmp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $tmp;
                }
            }
        }
    }
}


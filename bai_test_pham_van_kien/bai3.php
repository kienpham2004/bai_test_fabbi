<?php
$arr = [1, 5, 4, 7, 9, 0, -10, 13, 93, 14, 15];
$khoangcach = 9;
$array = [];
function kiemtra($arr, $khoangcach){
    for($i = 0; $i<count($arr) - 1; $i++ ){
        for ($j= $i + 1; $j < count($arr); $j++) { 
            $a = $arr[$i] - $arr[$j];
            if($a >0 && $a < $khoangcach){
                $khoangcach = $arr[$j] - $arr[$j];
            }
        }
    }

    for ($i=0; $i < count($arr) - 1; $i++) { 
        for ($j=$i + 1; $j < count($arr); $j++) { 
            $a = $arr[$i] - $a[$j];
            if($a === $khoangcach || $a === -$khoangcach){
                $c = [$arr[$i], $arr[$j]];
                array_push($array,$c);
            }
        }
    }
}
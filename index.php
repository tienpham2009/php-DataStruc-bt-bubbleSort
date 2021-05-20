<?php

$array = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];

for ($i = 0 ; $i < count($array) - 1 ; $i++){
    for ($j = 0 ; $j < count($array) - $i - 1 ; $j++){
        if ($array[$j] > $array[$j + 1]){
            $value = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $value;
        }
    }
}

echo implode(",", $array);
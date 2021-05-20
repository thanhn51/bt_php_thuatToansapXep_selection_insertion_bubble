<?php
function bubbleSort($arr)
{
    for ($j = 0; $j < count($arr); $j++) {
        for ($i = 0; $i < count($arr) - 1; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$i + 1];
                $arr[$i + 1] = $temp;
            }
        }
    }
    return $arr;
}


function selectionSort($newArr)
{
    $arr = $newArr;
    for ($j = 0; $j < count($arr) - 1; $j++) {
        $min = $j;
        for ($i = 1 + $j; $i < count($arr); $i++) {
            if ($arr[$min] > $arr[$i]) {
                $min = $i;
            }
        }
        $temp = $arr[$min];
        $arr[$min] = $arr[$j];
        $arr[$j] = $temp;
    }


    return $arr;
}

$arr = [1, 9, 4.5, 6.6, 5.7, -4.5];

function insertionSort($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        $min = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $min < $arr[$j]) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j+1] = $min;
    }
    return $arr;
}


echo implode('---', insertionSort($arr));

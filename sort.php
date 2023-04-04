<?php

$array_string = $_GET['array-string'];
$arr = explode(',', $array_string);
custom_arr_sort($arr);

echo 'Sorted array: <br>';
print_r($arr);

function array_swap(array &$arr, int $num): void
{
    $temp = $arr[0];
    $arr[0] = $arr[$num];
    $arr[$num] = $temp;
}

function custom_arr_sort(array &$arr): void
{
    $count = count($arr);
    for ($i = $count; $i > 1; $i--) {
        for ($j = 1; $j < $i; $j++) {
            if ($arr[$j] > $arr[0]) {
                array_swap($arr, $j);
            }
            array_swap($arr, $i - 1);
        }
    }
}
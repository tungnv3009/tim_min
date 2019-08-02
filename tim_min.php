<?php
$arr = [
    23,54,7657,8654,24,245,12
];


function findMin($arr) {
    $min = $arr[0];
    for ($i = 1; $i < count($arr); $i++)
    {
        if ($min >  $arr[$i]){
            $min = $arr[$i];

        }
    }
    return $min;
}


echo "Giá trị nhỏ nhất là " . findMin($arr);
?>
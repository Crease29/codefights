<?php
function replaceMiddle($arr)
{
    $c = count($arr);
    $rc = $c - 1;

    if ($c === 2) {
        return [array_sum($arr)];
    } elseif ($c % 2 === 0) {
        $i1 = floor($rc / 2);
        $i2 = ceil($rc / 2);
        $arr[$i1] = $arr[$i1] + $arr[$i2];
        unset($arr[$i2]);

        return array_values($arr);
    } elseif ($c % 2 === 1) {
        return $arr;
    }
}
<?php
function isSmooth($arr)
{
    $c = count($arr);
    $rc = $c - 1;

    return ($arr[0] == end($arr) ?
        ($c % 2 == 0 ? $arr[floor($rc / 2)] + $arr[ceil($rc / 2)] : $arr[$rc / 2]) == $arr[0] :
        false);
}
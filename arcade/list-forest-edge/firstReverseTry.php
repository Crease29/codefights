<?php
function firstReverseTry($arr)
{
    if (count($arr)) {
        $l = $arr[0];
        $arr[0] = $arr[count($arr) - 1];
        $arr[count($arr) - 1] = $l;
    }

    return $arr;
}
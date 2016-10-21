<?php
function removeArrayPart($inputArray, $l, $r)
{
    $b = $inputArray;

    return array_merge(array_splice($inputArray, 0, $l), array_splice($b, $r + 1, count($b) - $r - 1));
}
<?php
function checkSameElementExistence($arr1, $arr2)
{
    return count(array_intersect($arr1, $arr2));
}
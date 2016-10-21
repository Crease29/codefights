<?php
function candies($n, $m)
{
    return $m % $n == 0 ? $m : $m - ($m % $n);
}
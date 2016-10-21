<?php
function isInfiniteProcess($a, $b)
{
    return ($b > $a && ($b - $a) % 2 == 1) || $b - $a == 1 || $a > $b;
}
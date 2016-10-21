<?php
// URL: https://codefights.com/challenge/rXBQajNqcNeqx32Mz
function BaseAdd($a, $b, $c, $d)
{
    $e = intval($a, $b);
    $f = intval($c, $d);
    return base_convert($e + $f, 10, $e == $f ? max([$b, $d]) : ($e > $f ? $b : $d));
}
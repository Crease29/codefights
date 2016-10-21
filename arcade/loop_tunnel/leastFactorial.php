<?php
function leastFactorial($n)
{
    $i = 0;
    $k = 1;
    while ($k < $n) {
        $k *= ++$i;
    }

    return $k;
}

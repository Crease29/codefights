<?php
function magicalWell($a, $b, $n)
{
    $r = 0;

    for ($i = 1; $i <= $n; ++$i) {
        $r += ($i == 1 ? $a * $b : ++$a * ++$b);
    }

    return $r;
}
<?php
function countSumOfTwoRepresentations2($n, $l, $r)
{
    return ceil(($l > $n / 2) ? 0 : min([$n / 2 - $l, $r - $n / 2]) + ($n % 2 == 1 ? 0 : 1));
}
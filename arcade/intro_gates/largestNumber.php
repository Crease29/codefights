<?php
function largestNumber($n)
{
    $ret = '';
    for ($i = 1; $i <= $n; $i++) {
        $ret .= '9';
    }

    return (int)$ret;
}
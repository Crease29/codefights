<?php
function circleOfNumbers($n, $firstNumber)
{
    $half = $n / 2;

    if ($firstNumber > $half) {
        return ($n / 2 - $firstNumber) * -1;
    } elseif ($firstNumber == $half) {
        return 0;
    } else {
        return $n / 2 + $firstNumber;
    }
}
<?php
function tennisSet($score1, $score2)
{
    $min = min($score1, $score2);
    $max = max($score1, $score2);

    return $min !== $max && ($max == 6 && $min < 5 || $max == 7 && $min >= 5);
}
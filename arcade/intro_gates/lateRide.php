<?php
function lateRide($n)
{
    return array_sum(str_split(floor($n / 60))) + array_sum(str_split($n % 60));
}
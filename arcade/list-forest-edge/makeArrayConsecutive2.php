<?php
function makeArrayConsecutive2($sequence)
{
    return count(array_diff(range(min($sequence), max($sequence)), $sequence));
}
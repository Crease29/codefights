<?php
function knapsackLight($value1, $weight1, $value2, $weight2, $maxW)
{
    if ($weight1 + $weight2 <= $maxW) {
        return $value1 + $value2;
    } elseif ($weight1 <= $maxW && $weight2 <= $maxW) {
        return max([$value1, $value2]);
    } elseif ($weight1 <= $maxW) {
        return $value1;
    } elseif ($weight2 <= $maxW) {
        return $value2;
    }

    return 0;
}
<?php
function angleType($measure)
{
    if ($measure < 90) {
        return "acute";
    } elseif ($measure == 90) {
        return "right";
    } elseif ($measure > 90 && $measure < 180) {
        return "obtuse";
    } elseif ($measure == 180) {
        return "straight";
    }
}
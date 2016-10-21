<?php
function companyBotStrategy($trainingData)
{
    $cnt = 0;
    $sum = 0;

    foreach ($trainingData as $item) {
        if($item[1] == 1) {
            $cnt++;
            $sum += $item[0];
        }
    }

    return $cnt > 0 ? $sum / $cnt : 0;
}
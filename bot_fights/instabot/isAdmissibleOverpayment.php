<?php
function isAdmissibleOverpayment($prices, $notes, $x)
{
    $overpayment = 0;

    foreach ($prices as $i => $price) {
        if (preg_match("/(\d*.\d+|\d+)% (higher|lower)/i", $notes[ $i ], $matches)) {
            if ($matches[ 2 ] == 'higher') {
                $overpayment += $price - ($price / (100 + (float)$matches[ 1 ]) * 100);
            } else {
                $overpayment -= ($price / (100 - (float)$matches[ 1 ]) * 100) - $price;
            }

            echo "\n";
        }
    }

    return $x >= $overpayment;
}
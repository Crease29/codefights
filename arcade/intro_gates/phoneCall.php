<?php
function phoneCall($min1, $min2_10, $min11, $s) {
    $remaining = $s - $min1;
    $minsSpent = 1;

    if( $remaining >= $min2_10) {
        if( $remaining - $min2_10 * 9 > 0 ) {
            $remaining -= $min2_10 * 9;
            $minsSpent += 9;

            if( $remaining >= $min11 ) {
                $minsSpent += floor( $remaining / $min11 );
            }
        } else {
            $minsSpent += floor( $remaining / $min2_10 );
        }
    } elseif( $remaining < 0 ) {
        $minsSpent = 0;
    }

    return $minsSpent;
}
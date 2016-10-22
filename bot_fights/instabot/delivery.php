<?php
function delivery($order, $shoppers)
{
    $r = [];

    foreach ($shoppers as $shopper) {
        $t   = ($shopper[ 0 ] + $order[ 0 ]) / $shopper[ 1 ] + $shopper[ 2 ];
        $r[] = ($t >= $order[ 1 ] && $t <= ($order[ 1 ] + $order[ 2 ]));
    }

    return $r;
}
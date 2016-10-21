<?php
// only 23 points. 1 hidden test succeeded. 3 other failed.
function domainForwarding($redirects)
{
    $rg = [];

    foreach ($redirects as $i => $redirect) {
        $from  = $redirect[ 0 ];
        $to    = $redirect[ 1 ];
        $found = false;

        foreach ($rg as $i => $group) {
            if (in_array($to, $group)) {
                $found   = true;
                $rg[$i][] = $from;
            }
        }

        if (!$found) {
            $rg[] = [$from, $to];
        }

        foreach ($rg as $i => $group) {
            sort($group);

            $rg[$i] = $group;
        }
    }

    usort($rg, function($a, $b) {
        return $a[0] <=> $b[0];
    });

    return $rg;
}
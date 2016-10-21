<?php
function taskMaker($source, $challengeId)
{
    $clean = [];
    foreach ($source as $line) {
        if (preg_match("/^ *\/\/DB ([0-9]+)\/\//i", $line, $match)) {
            if ($match[ 1 ] == $challengeId) {
                $clean[ count($clean) - 1 ] = preg_replace("/\/\/DB ([0-9]+)\/\//i", '', $line);
            }
        } else {
            $clean[] = $line;
        }
    }

    return $clean;
}
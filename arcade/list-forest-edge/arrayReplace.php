<?php
function arrayReplace($inputArray, $elemToReplace, $substitutionElem)
{
    foreach ($inputArray as $i => $item) {
        if ($item === $elemToReplace) {
            $inputArray[$i] = $substitutionElem;
        }
    }

    return $inputArray;
}
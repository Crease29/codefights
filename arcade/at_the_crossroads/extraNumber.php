<?php
function extraNumber($a, $b, $c)
{
    return array_search(1, array_count_values([$a, $b, $c]));
}
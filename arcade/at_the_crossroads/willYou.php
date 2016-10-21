<?php
function willYou($young, $beautiful, $loved)
{
    return $loved && !($young && $beautiful) || ($young && $beautiful && !$loved);
}
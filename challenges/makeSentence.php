<?php
function makeSentence($w) {
    return join(' ', array_map(join, $w)) . '.';
}
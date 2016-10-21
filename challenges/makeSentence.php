<?php
function makeSentence($w) {
    return join(' ', array_map(join, $w)) . '.';
}

var_dump(makeSentence([["G","o","o","d"],
                       ["m","o","r","n","i","n","g"]]));
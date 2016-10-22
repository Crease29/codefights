<?php
function incorrectPasscodeAttempts($passcode, $attempts)
{
    $a = 0;

    foreach ($attempts as $attempt) {
        $a++;

        if ($attempt == $passcode) {
            $a = 0;
        }

        if ($a == 10) {
            return true;
        }
    }

    return false;
}
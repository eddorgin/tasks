<?php

function reverseNumber($number) {
    if ($number < 0 || !is_int($number)) {
        return "Передайте целое неотрицательное число";
    }
    $reverseNumber = 0;
    while ($number > 0) {
        $reverseNumber += ($number % 10);
        $number = intval($number / 10);
        if ($number > 0) {
            $reverseNumber = $reverseNumber * 10;
        }
    }
    return $reverseNumber;
}

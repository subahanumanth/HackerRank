<?php

function bonAppetit($bill, $k, $b) {
    unset($bill[$k]);
    $sum = array_sum($bill);
    $sum=$sum/2;
    if($sum == $b) {
        echo "Bon Appetit";
    } else {
        echo abs($sum-$b);
    }
}

<?php

function birthdayCakeCandles($ar) {
    $maximum = max($ar);
    $count = array_count_values($ar);
    return $count[$maximum];
}

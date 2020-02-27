<?php

function miniMaxSum($arr) {
    $result = [];
    for($i=0;$i<count($arr);$i++) {
        $temp = $arr[$i];
        unset($arr[$i]);
        array_push($result, array_sum($arr));
        array_push($arr, $temp);
    }

    echo sprintf("%u %u",min($result),max($result));
}

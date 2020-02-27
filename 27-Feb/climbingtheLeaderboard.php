<?php

function climbingLeaderboard($scores, $alice) {
    $result = [];
    $arr = array_unique($scores);
    for ($i=0; $i<count($alice); $i++) {
        $a=0;
        array_push($arr,$alice[$i]);
        rsort($arr);
        $a = array_search($alice[$i],$arr);
        array_push($result,$a+1);
        unset($arr[$a]);
    }
    return $result;
}

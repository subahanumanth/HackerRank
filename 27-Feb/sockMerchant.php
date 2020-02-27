<?php
function sockMerchant($n, $ar) {
    $result = 0;
    $b = array_count_values($ar);
    foreach($b as $key=>$value) {
        if($value % 2 == 0) {
            $result = $result + ($value/2);
        } else {
            $result = $result + ($value-1)/2;
        }
    } 
    return $result;
}

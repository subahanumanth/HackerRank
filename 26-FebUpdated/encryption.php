function encryption($s) {
    $result = [];
    $string = str_replace(' ','',$s);
    $arr = [];
    $length = strlen($string);
    $root = sqrt($length);
    $floor = floor($root);
    $ceil = ceil($root);
    $value = 0;
    for($i=0;$i<=$floor;$i++) {
        for($j=0;$j<$ceil;$j++) {
            if(isset($string[$value])) {
                $arr[$i][$j] = $string[$value];
                $value++;
            }   
        }
    }
    for ($i = 0; $i < $ceil; $i++) {
        $value = array_column($arr, $i);
        $str = implode('', $value);
        array_push($result, $str);
    }
    return implode(" ", $result);
}

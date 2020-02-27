//https://www.hackerrank.com/challenges/encryption/problem

function encryption($s) {
    $encrypt = '';
    $replace = str_replace(' ','',$s);
    $arr = [];
    $root = strlen($replace);
    $squareRoot = sqrt($root);
    $floor = floor($squareRoot);
    $ceil = ceil($squareRoot);
    $result = 0;
    for($i=0;$i<=$floor;$i++) {
        for($j=0;$j<$ceil;$j++) {
            if(isset($b[$r])) {
                $arr[$i][$j] = $b[$r];
                $result++;
            }
        }
    }
    //print_r($arr);
    for ($i = 0; $i < $ceil; $i++) {
        $value = array_column($arr, $i);
        $str = implode('', $value);
        $encrypt .= $str." ";
    }
    return $encrypt;
}

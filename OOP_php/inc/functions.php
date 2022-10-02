 <?php

    function pluck($arr, $key) {
    $results = array_map(function($item) use($key) {
            return $item[$key];
    }, $arr);

    return $results;
 }

 function output($value) {
    echo '<pre>';
    print_r($value);
    echo '</pre>';
};

function sum($a, $b) {
    return $a + $b;
}

 ?>
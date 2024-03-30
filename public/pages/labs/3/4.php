<?php

$arr1 = array();
$arr2 = array();

for ($i = 10; $i <= 20; $i++) {
    $arr1[] = $i ** 2;
}

for ($i = 1; $i <= 10; $i++) {
    $arr2[] = $i ** 3;
}

$new_arr = array_merge($arr1, $arr2);
echo "<pre>" . print_r($new_arr, true) . "</pre>";
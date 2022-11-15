<?php

$array1 = ([5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200']);
echo gettype($array1);
foreach ($array1 as $element) {
    if (is_numeric($element)){

    }
}

// $_COOKIE
?>
<?php

$arr = array(rand(), rand(), rand(), rand(), rand(), rand(), rand(), rand());
asort($arr);
print_r($arr);
$min = array_shift($arr);
arsort($arr);
$max = array_shift($arr);
array_unshift($arr, $max);
array_push($arr, $min);
echo '<br>======================<br>';
print_r($arr);

<?php
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $e) {
if ($e != 3 && $e != 6) {
if ($e != 9) {
echo $e . ',<br>';
} else {
echo $e . '<br>';	
}
} else {
echo $e;
}	
}

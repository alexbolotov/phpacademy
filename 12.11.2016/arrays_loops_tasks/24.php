<?php
function myStrOn($a, $c) {
if (!is_nan($a) || !is_nan($c)) {
return 'Вы ввели не число';
}

$l = strlen($a);
$res = 0;
for ($i=0; $i <= $l; $i++) {
if (strpos($a, $c, $i)) {
$res++; 
}
}
return 'цифра ' . $c . ' в числе ' . $a . ' встречается ' . $res . ' раза.';	
}



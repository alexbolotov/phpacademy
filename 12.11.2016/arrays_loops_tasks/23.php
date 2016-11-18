<?php
function mySumm($a) {
if (!is_nan($a)) {
return 'Вы ввели не число';
}
$l = strlen($a);
for ($i=0; $i <= $l; $i++) {
$b = substr($a, $i, 1);
$res = $res + $b; 
}
return $res;	
}


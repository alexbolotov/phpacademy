<?php
function myCalc($a, $operator, $b) {
if (is_nan($a) || is_nan($b)) return 'Не числовое значение';
if ($operator=='+') {
$r = $a + $b; echo $r;
} elseif ($operator=='-') {
$r = $a - $b; echo $r;
} elseif ($operator=='*') {
$r = $a * $b; echo $r;
} elseif ($operator=='/') {
if ($b == 0) return 'Деление на 0 невозможно';
$r = $a / $b; echo $r;
} elseif ($operator=='%') {
$r = $a % $b; echo $r;
} else {
echo 'Операция - ' . $operator . ', не предусмотрена';	
}
}

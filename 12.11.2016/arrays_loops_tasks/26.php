<?php
for ($i=0; $i<=99; $i++) {
$arr[] = rand(1, 100);
if ($i % 2 == 0) {
if ($i <= 4) {
$r = $arr[2]  * $arr[4];
} else {
$r = $r * $arr[$i];	
}
} elseif ($i % 2 != 0) {
echo $arr[$i] . ', ';			
}	
}
echo '================================<br>';
// Результат "вычислить произведение тех элементов, которые больше ноля и у которых парные индексы", находится в переменной $r
echo $r;

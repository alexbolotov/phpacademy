<?php
//$name= "Alex";
//$age = 43;
//echo "Меня зовут: " . $name . "<br>";
//echo "Мне " . $age . " лет";
/*
if ($age >= 18 && $age <= 59) {
echo "Вам еще работать и работать";
} elseif ($age <= 17) {
echo "Вам еще рано работать";
} elseif ($age <= 0 || is_nan($age)) {
echo "Неизвестный возраст";
} else {
echo "Вам пора на пенсию";
}	
*/
$day = 30;
switch ($day) {
	case 1:
	case 2:
	case 3:
	case 4:
	case 5: echo "Это рабочий день";
break;
	case 6:
	case 7: echo "Это выходной день";
break;
}	
	

<?php
//$name= "Alex";
$age = 43;
//echo "Меня зовут: " . $name . "<br>";
//echo "Мне " . $age . " лет";

if ($age >= 18 && $age <= 59) {
echo "Вам еще работать и работать";
} elseif ($age <= 17) {
echo "Вам еще рано работать";
} elseif ($age <= 0 || is_nan($age)) {
echo "Неизвестный возраст";
} else {
echo "Вам пора на пенсию";
}	

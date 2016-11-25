<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Написать функцию</title>
<!-- Ключевые слова для поиска -->
<meta name="keywords" content="Задание, Написать функцию">
<!-- Дескриптор страницы -->
<meta name="description" content="Написать функцию">
<!-- Автор контента -->
<meta name="author" content="Александр Болотов">
</head>
<body>
<blockquote>
<small>
<b>Группа:</b> 29.10_Инт_Сб(10:00-14:00)_<br>
<b>Студент:</b> Александр Болотов<br>	
<b>Задание:</b>  Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.
</blockquote>
<h1>Cписок файлов в заданной директории: </h1>

<?php
function myDirFiles($d){
$a = scandir($d);
foreach ($a as $b) {
echo '<b>' . $b . '</b><br>';
}
}
myDirFiles(__DIR__);
?>

</body>
</html>

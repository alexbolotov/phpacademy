<!DOCTYPE html>
<!-- Переписал с учетом рекомендаций - "11- можно разбить строку на элементы массива с помощью explode(\'. \', $a); 
А потом первую букву привксти к верхнему регистру и сконкатенировать с остальным предложением",
однако все равно встречается проблема с кодировками. . -->
<?php
function upiWord($a) {
$a=explode('. ', $a);
foreach ($a as $k => $b) {
$a[$k] = mb_strtoupper(mb_substr($b,0,1), 'UTF-8').mb_substr($b,1,strlen($b));
}
$result = implode(". ", $a);
echo $result;
}
?>

<html>
<head>
<meta charset="utf-8">
<title>Форматирование строки</title>
<!-- Ключевые слова для поиска -->
<meta name="keywords" content="Задание, форматирование строки">
<!-- Дескриптор страницы -->
<meta name="description" content="Форматирование строки">
<!-- Автор контента -->
<meta name="author" content="Александр Болотов">
</head>
<body>
<blockquote>
<small>
<b>Группа:</b> 29.10_Инт_Сб(10:00-14:00)_<br>
<b>Студент:</b> Александр Болотов<br>	
<b>Задание:</b> Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что каждое новое предложение начиняется с большой буквы.
<h1>Форматирование строки: </h1>
<?php
upiWord($_POST['msg']);
?>
<form name="form1" method="post" action="11.php" enctype="multipart/form-data">
<table border="2">

<tr>
<td>
Введите строку: 
</td>
<td align="center"><textarea type="text" name="msg" rows="10" cols="45"></textarea></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="       Отправить       " /></td>
</tr>
</table>
</form>


</body>
</html>

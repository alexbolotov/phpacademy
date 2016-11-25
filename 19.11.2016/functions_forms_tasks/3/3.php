<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Форма №3</title>
<!-- Ключевые слова для поиска -->
<meta name="keywords" content="Задание, форма">
<!-- Дескриптор страницы -->
<meta name="description" content="Работа с формой">
<!-- Автор контента -->
<meta name="author" content="Александр Болотов">
</head>
<body>
<blockquote>
<small>
<b>Группа:</b> 29.10_Инт_Сб(10:00-14:00)_<br>
<b>Студент:</b> Александр Болотов<br>	
<b>Задание:</b>  Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов. Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.
</blockquote>
<h1>Форма №3 </h1>
<form name="form1" method="post" action="3.php" enctype="multipart/form-data">
<table border="2">
<tr>
<td>
Введите длину слова(число): 
</td>
<td align="center"><input type="text" name="dlina" id="dlina"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="       Отправить       " /></td>
</tr>
</table>
</form>
<?php
$a=$_POST['dlina'];
if (empty($a)) {
echo 'Вы не задали значение!';
} elseif (is_numeric($a)) {
$fil=file_get_contents('3.txt');
$arr=(explode(' ',$fil));
foreach ($arr as $i => $y) {
if (strlen($arr[$i]) == $a){
unset($arr[$i]);
}
}
file_put_contents('3_res.txt', implode(" ", $arr));
echo 'Операция проведена успешно, слова длинной - ' . $a . ' символов удалены, файл 3_res.txt записан';
} else {
echo 'Вы ввели не числовое значение!';	
}
?>

</body>
</html>

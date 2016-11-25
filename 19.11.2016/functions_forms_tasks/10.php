<!DOCTYPE html>

<?php
function uniWord($a){
$b=explode(' ', $a);
$b=array_unique($b);
if ($b[0] != null) {
echo 'Уникальные слова - ' . count($b) . ' шт.';
} else {
echo 'Уникальные слова - 0 шт.';	
}
}
?>

<html>
<head>
<meta charset="utf-8">
<title>Подсчет уникальных слов</title>
<!-- Ключевые слова для поиска -->
<meta name="keywords" content="Задание, подсчет уникальных слов">
<!-- Дескриптор страницы -->
<meta name="description" content="подсчет уникальных слов">
<!-- Автор контента -->
<meta name="author" content="Александр Болотов">
</head>
<body>
<blockquote>
<small>
<b>Группа:</b> 29.10_Инт_Сб(10:00-14:00)_<br>
<b>Студент:</b> Александр Болотов<br>	
<b>Задание:</b> Написать функцию, которая считает количество уникальных слов в тексте. Слова разделяются пробелами. Текст должен вводиться с формы.
<h1>Подсчет уникальных слов: </h1>
<?php
uniWord($_POST['msg']);
?>
<form name="form1" method="post" action="10.php" enctype="multipart/form-data">
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

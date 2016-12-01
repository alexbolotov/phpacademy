<!DOCTYPE html>

<?php
function rewString($a) {
$a=explode('.', $a);
$a = array_reverse($a);
$a = array_filter($a);
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
<b>Задание:</b> Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что предложения идут в обратном порядке.
<h1>Форматирование строки: </h1>
<?php
rewString($_POST['msg']);
?>
<form name="form1" method="post" action="12.php" enctype="multipart/form-data">
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

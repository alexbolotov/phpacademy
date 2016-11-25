<!DOCTYPE html>

<?php
function srtRev(){
echo strrev($_POST['msg']);
}
?>

<html>
<head>
<meta charset="utf-8">
<title>Переворот строки</title>
<!-- Ключевые слова для поиска -->
<meta name="keywords" content="Задание, переворот строки">
<!-- Дескриптор страницы -->
<meta name="description" content="переворот строки">
<!-- Автор контента -->
<meta name="author" content="Александр Болотов">
</head>
<body>
<blockquote>
<small>
<b>Группа:</b> 29.10_Инт_Сб(10:00-14:00)_<br>
<b>Студент:</b> Александр Болотов<br>	
<b>Задание:</b> Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы.
<h1>Переворот строки: </h1>
<?php
srtRev();
?>
<form name="form1" method="post" action="9.php" enctype="multipart/form-data">
<table border="2">

<tr>
<td>
Введите строку: 
</td>
<td align="center"><input type="text" name="msg" maxlength="40" size="30"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="       Отправить       " /></td>
</tr>
</table>
</form>


</body>
</html>

<!DOCTYPE html>
<?php
function getCommonWords($a, $b) {
$a=explode(' ',$a);
$b=explode(' ',$b);
foreach ($a as $x) {
if (array_search($x, $b) !== false) {
$z[] = $x;
}
}
print_r($z);
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Форма №1</title>
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
<b>Задание:</b> Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова, которые есть и в первом и во втором поле ввода. Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b), которая будет возвращать массив с общими словами.  
</blockquote>
<h1>Форма №1 </h1>
<form name="form1" method="post" action="1.php" enctype="multipart/form-data">
<table border="2">
<tr>
<td colspan="2" align="center"><textarea rows="5" cols="45" name="message1" id="message1" placeholder="Ваше сообщение..."></textarea></td>
</tr>
<tr>
<td colspan="2" align="center"><textarea rows="5" cols="45" name="message2" id="message2" placeholder="Ваше сообщение..."></textarea></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="       Отправить       " /></td>
</tr>
</table>
</form>

<?php
print_r (getCommonWords($_POST['message1'], $_POST['message2']));
?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Форма №2</title>
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
<b>Задание:</b>  Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.
</blockquote>
<h1>Форма №2 </h1>
<form name="form1" method="post" action="2.php" enctype="multipart/form-data">
<table border="2">
<tr>
<td colspan="2" align="center"><textarea rows="5" cols="45" name="message1" id="message1" placeholder="Ваше сообщение..."></textarea></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="       Отправить       " /></td>
</tr>
</table>
</form>
<?php

function sMm($a, $b) {
if(strlen($a) < strlen($b)) { 
return 1;
} elseif(strlen($a) == strlen($b)) {
return 0;
} else {
return -1;
}
}

$a = $_POST['message1'];
function getCommonWords($a) {
$a=explode(' ',$a);
usort($a, 'sMm');
echo $a[0] . '<br>' . $a[1] . '<br>' . $a[2] . '<br>';
}
if ($a != NULL) {
getCommonWords($a);
}

?>

</body>
</html>

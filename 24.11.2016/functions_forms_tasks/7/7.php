<!DOCTYPE html>
<!-- Задание переписано с учетом комментария преподавателя от 19.11.2016 -"7 - прочитайте, как можно проще хранить данные http://php.net/manual/ru/function.serialize.php" -->
<?php
function addComment(){
if (!empty($_POST['msg'])) {
$b = unserialize(file_get_contents('comments.txt'));
if (empty($_POST['usr'])) {
$b[] = '<b>Аноним</b>: ' . $_POST['msg'];	
} else {
$b[$_POST['usr']] = '<b>' . $_POST['usr'] . '</b>: ' . $_POST['msg'];
}
file_put_contents('comments.txt', serialize($b));
}
}
addComment();
?>

<html>
<head>
<meta charset="utf-8">
<title>Гостевая книга</title>
<!-- Ключевые слова для поиска -->
<meta name="keywords" content="Задание, гостевая книга">
<!-- Дескриптор страницы -->
<meta name="description" content="Гостевая книга">
<!-- Автор контента -->
<meta name="author" content="Александр Болотов">
</head>
<body>
<blockquote>
<small>
<b>Группа:</b> 29.10_Инт_Сб(10:00-14:00)_<br>
<b>Студент:</b> Александр Болотов<br>	
<b>Задание:</b> Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его. Все добавленные комментарии выводятся над текстовым полем.
<h1>Гостевая книга: </h1>
<?php
$book = unserialize(file_get_contents('comments.txt'));
foreach($book as $a => $b) {
echo  $b . '<br>';
}
?>
<form name="form1" method="post" action="7.php" enctype="multipart/form-data">
<table border="2">
<tr>
<td>
Ваше имя: 
</td>
<td align="center"><input type="text" name="usr" id="usr"> </td>
</tr>
<tr>
<td>
Коментарий: 
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

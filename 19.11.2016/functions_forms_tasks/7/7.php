<!DOCTYPE html>

<?php
function addComment(){
if (!empty($_POST['msg'])) {
if (empty($_POST['usr'])) {
$a = '<p><b>Аноним:</b><br>';	
} else {
$a = '<p><b>' . $_POST['usr'] . ':</b><br>';
}	
$a .= '<i>' . $_POST['msg'] . '</i><br>';
file_put_contents('comments.txt', $a, FILE_APPEND | LOCK_EX);
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
include "comments.txt";
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

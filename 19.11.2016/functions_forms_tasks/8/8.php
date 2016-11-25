<!DOCTYPE html>

<?php
function addComment(){
$filtr = array('сука', 'падла', 'блять');
if (!empty($_POST['msg'])) {
if (empty($_POST['usr'])) {
$a = '<p><b>Аноним:</b><br>';	
} else {
$a = '<p><b>' . $_POST['usr'] . ':</b><br>';
}
$msgstr = strip_tags(str_replace($filtr, '***', $_POST['msg'], $count),'<b>');		
if($count > 0){
$msgstr .= ' <font color="red"><b>(Некорректный комментарий!)</b></font><br>';
}	
$a .= '<i>' . $msgstr . '</i><br>';
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
<b>Задание:</b> Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его. Все добавленные комментарии выводятся над текстовым полем. Реализовать проверку на наличие в тексте запрещенных слов, матов. При наличии таких слов - выводить сообщение "Некорректный комментарий". Реализовать удаление из комментария всех тегов, кроме тега &lt;b&gt;.
<h1>Гостевая книга: </h1>
<?php
include "comments.txt";
?>
<form name="form1" method="post" action="8.php" enctype="multipart/form-data">
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

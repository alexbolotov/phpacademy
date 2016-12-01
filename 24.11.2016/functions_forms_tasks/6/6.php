<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Загрузка изображений</title>
<!-- Ключевые слова для поиска -->
<meta name="keywords" content="Задание, загрузить изображения">
<!-- Дескриптор страницы -->
<meta name="description" content="загрузка изображений">
<!-- Автор контента -->
<meta name="author" content="Александр Болотов">
</head>
<body>
<blockquote>
<small>
<b>Группа:</b> 29.10_Инт_Сб(10:00-14:00)_<br>
<b>Студент:</b> Александр Болотов<br>	
<b>Задание:</b> Создать страницу, на которой можно загрузить несколько фотографий в галерею. Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.
<h1>Загрузка изображений: </h1>

<form name="form1" method="post" action="6.php" enctype="multipart/form-data">
<table border="2">
<tr>
<td>
Выбирите файлы для загрузки: 
</td>
<td align="center"><input type="hidden" name="MAX_FILE_SIZE" value="900000"><input name="pictures[]" type="file" multiple=""></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="       Загрузить       " /></td>
</tr>
</table>
</form>

<?php
foreach ($_FILES["pictures"]["error"] as $key => $error) {
if ($error == UPLOAD_ERR_OK) {
$tmp_name = $_FILES["pictures"]["tmp_name"][$key];
$name = basename($_FILES["pictures"]["name"][$key]);
move_uploaded_file($tmp_name, "gallery/$name");
echo 'Файл ' . $name . ' был успешно загружен.<br>';
} else {
echo 'Ошибка, файлы не могут быть загружены.<br>';	
}
}
?>
<!---Отображаем загруженные файлы в директории gallery, таблица шириной в 4 колонки. 
Отображаемые изображения в независимости от их реального размера имеют размер в ширину 100 пикселей -->
<?php
$a = scandir('gallery');
$i = 0;
echo '<table>';
foreach ($a as $k => $b) {
if ($k == 0 or $k == 1) {
continue;
}
if ($i == 0) {
echo '<tr>';
} 
echo '<td><img src="gallery/' . $b . '" width="100"></td>';
if ($i == 3) {
echo '</tr>';
}
$i++;
}
echo '</table>';
?>

</body>
</html>

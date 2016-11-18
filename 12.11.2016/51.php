<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Home work</title>
</head>
<body>

<?php
for ($i = 200; $i <= 400; $i++) {
	if ($i % 2 != 0) {
		echo 'Число найдено, это - ' . $i . ' <br>';
		break;
	}
}

?>

</body>
</html>

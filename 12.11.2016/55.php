<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Home work</title>
</head>
<body>

<?php
$fil = fopen('test.txt', 'a');
for ($i = 1; $i <= 10; $i++) {
switch ($i) {
case 1: fwrite($fil, '1' . PHP_EOL);
break;
case 2: fwrite($fil, '22' . PHP_EOL);
break;
case 3: fwrite($fil, '33' . PHP_EOL);
break;
case 10: fwrite($fil, 'десять десяток ');
break;
default: fwrite($fil, 'Строка #'. $i . PHP_EOL);
}
}
fclose($fil);
?>

</body>
</html>

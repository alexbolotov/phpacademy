<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Home work</title>
</head>
<body>

<?php
$i = 1;
while ($i <= 100) :
echo 'Простое число - ' . "{$i} <br>";
$i++;
endwhile;
echo '=====================================<br>';
for ($i = 1; $i <= 100; $i++) :
echo 'Простое число - ' . "{$i} <br>";
endfor;
echo '=====================================<br>';
$a = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
foreach($a as $b) :
if($b % 3 == 0) :
echo 'Число делящееся на 3 - ' . $b . '<br>';
endif;
endforeach;

?>

</body>
</html>

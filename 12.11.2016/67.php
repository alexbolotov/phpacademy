<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Home work</title>
</head>
<body>

<?php
function preArray($x, $y=2) {
if ($y == 2) {	
echo '<pre>';
print_r($x);
echo '</pre>';
} else {
echo '<pre>';
var_dump($x, $y);
echo '</pre>';	
}
}
$gh = array('one ', 'two ', '12345');
echo 'printr<br>';
preArray($gh);
echo '=======================================================<br>';
$fg = 345;
echo 'vardump<br>';
preArray($gh, $fg);
?>

</body>
</html>

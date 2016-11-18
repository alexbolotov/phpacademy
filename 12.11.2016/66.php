<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Home work</title>
</head>
<body>

<?php
function preArray($x) {
echo '<pre>';
print_r($x);
echo '</pre>';
}
$gh = array('one ', 'two ', '12345');
preArray($gh);
?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Home work</title>
</head>
<body>

<?php
function preArray($x) {
array_push($x, count($x));
print_r($x);
}
$gh = array(1, 2, 3, 4, 5, 6, 7, 7,999);
preArray($gh);
?>

</body>
</html>

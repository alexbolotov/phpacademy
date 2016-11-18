<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Home work</title>
</head>
<body>
    <?php

$a = array(1, 2, 3, 4, 5, 6, 7, 8);
       
function myFun($x)
{
foreach ($x as $y) {
echo $y . '<br>';
}
}

myFun($a); 

    ?>
</body>
</html>

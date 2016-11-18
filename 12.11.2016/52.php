<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Home work</title>
</head>
<body>

<?php
function test($x, $y)
{
	if ($y == 0) {
		exit('Error');
	}

	return $x / $y;

}

echo test(1, 0);
echo 'Unreached line';

?>

</body>
</html>

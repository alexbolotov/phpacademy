<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP Home work</title>
</head>
<body>

<form action="31.php" method="post">
    <input type="text" name="name"/> <br>
    <input type="text" name="email"/> <br>
    <input type="text" name="phone"/> <br>
    <input type="submit" value="  send   "/>
</form>
<?php
echo $str  = serialize($_POST);

?>

</body>
</html>

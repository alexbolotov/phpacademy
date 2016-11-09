<?php

if (!empty($_POST)) {
	header('Content-type: text/html');
	echo '<p>Data sent: </p><pre>' . var_export($_POST, 1) . '</pre>';
}
?>

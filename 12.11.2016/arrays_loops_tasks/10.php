<?php

for ($i=1; $i <= 100; $i++) {
if ($i >= 11 || $i <= 33) {
echo $i . '\r\n';
} elseif ($i > 33) {
	break;
}	
}

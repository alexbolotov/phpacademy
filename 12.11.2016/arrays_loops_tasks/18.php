<?php
$arr = array(1 => 'Monday', 
             2 => 'Tuesday', 
             3 => 'Wednesday', 
             4 => 'Thursday', 
             5 => 'Friday', 
             6 => 'Saturday', 
             7 => 'Sunday');

foreach ($arr as $a => $e) {
if ($a == 6 || $a == 7) {
	echo '<b>' . $e . '</b><br>';
} else {
	echo $e . '<br>';
}
}


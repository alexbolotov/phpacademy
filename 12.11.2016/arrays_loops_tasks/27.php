<?php
$row = 15;
$cols = 10;
$colors = array('red','yellow','blue','gray','maroon','brown','green');
echo '<table border="1">';
for ($i=1; $i<=$row; $i++) {
echo '<tr>';
for ($c=1; $c<=$cols; $c++) {
echo '<td bgcolor=' . $colors[rand(0, 6)] . '>' . rand() . '</td>';	
}
echo '</tr>';
}
echo '</table>';

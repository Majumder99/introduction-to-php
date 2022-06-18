<?php

echo date("Y-d-m-l");
echo '<br>';
echo date("H-h-i-sa");
echo '<br>';

$d = mktime(11, 15, 60, 8, 21, 2022);
echo date('Y-d-m-l-s', $d);
echo "<br>";

$s = strtotime('Today');
echo date('Y-s', $s);
echo "<br>";

?>

<html>

</html>
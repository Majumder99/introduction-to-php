<?php

echo readfile('web.txt');
echo "<br>";

$d = fopen('web.txt', 'r')
    or die("Unable to open file!");;
echo fread($d, filesize('web.txt'));
echo "<br>";
fclose($d);


?>

<html>

</html>
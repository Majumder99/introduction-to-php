<?php

// $t = fopen('newFile.txt', 'w');

// fwrite($t, 'My name is sourav');

$s = fopen('newFile.txt', 'a');
fwrite($s, 'What is your name?<br>');
$r = "<br>";
fwrite($s, $r);
fclose($s);

?>

<html>

</html>
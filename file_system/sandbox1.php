<?php

$file = 'test.txt';

// oopening a file for reading

$handle = fopen($file, 'r');


// read the file

echo fread($handle, filesize($file));
// 
// read a single line

// echo fgets($handle);

// read a single character

// echo fgetc($handle);

// writing to a file

$newhandle = fopen('write.txt', 'a');
fwrite($newhandle, 'Hello there');

?>

<html>

</html>
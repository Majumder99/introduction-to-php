<?php

use function PHPSTORM_META\map;

$file = 'test.txt';

if (file_exists($file)) {
    echo readfile($file) . "<br>";
} else {
    echo "Such file doesn't exist";
}

// copy($file, 'test.txt');

// rename($file, 'sourav.txt');

// mkdir('souav');

echo filesize($file);

?>


<html>

</html>
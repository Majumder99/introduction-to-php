<?php

$x = 10;
$y = 11;

if ($x < $y) {
    echo "X is larger than Y";
} elseif ($x === $y) {
    echo "X is equal to Y";
} else {
    echo 'X is lower than Y';
}

echo "<br>";


$color = 'red';
switch ($color) {
    case 'red':
        echo 'This is red';
        break;
    case 'blue':
        echo 'This is blue';
        break;
    case 'pink':
        echo 'This is pink';
        break;
    default:
        echo "This is yellow";
        break;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>
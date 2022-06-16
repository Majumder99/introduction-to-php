<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // indexed array
    $names = ['sourav', 'majumder', 'riyad'];
    print_r($names);
    echo "<br>";
    //associative array
    $names = ['sourav' => 20, 'majumder' => 30];
    print_r($names);
    echo "<br>";
    //Multidimensional array
    $names = [
        ['soruav', 'majumder'],
        [27, 25]
    ];
    print_r($names);
    ?>
</body>

</html>
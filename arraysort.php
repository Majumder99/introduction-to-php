<!-- sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key -->


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

    $age = array(20, 5, 52, 03, 24, 90, 100);
    sort($age);
    for ($i = 0; $i < count($age); $i++) {
        echo "$age[$i] <br>";
    }
    echo "<br>";

    $age = array(20, 5, 52, 03, 24, 90, 100);
    rsort($age);
    for ($i = 0; $i < count($age); $i++) {
        echo "$age[$i] <br>";
    }
    echo "<br>";

    $name = array("Sourav" => 50, "Majumder" => 20, "Mahim" => 60);
    asort($name);
    foreach ($name as $key => $value) {
        echo "$key => $value <br>";
    }
    echo "<br>";

    $name = array("Sourav" => 50, "Majumder" => 20, "Mahim" => 60);
    ksort($name);
    foreach ($name as $key => $value) {
        echo "$key => $value <br>";
    }
    echo "<br>";

    $name = array("Sourav" => 50, "Majumder" => 20, "Mahim" => 60);
    arsort($name);
    foreach ($name as $key => $value) {
        echo "$key => $value <br>";
    }
    echo "<br>";

    $name = array("Sourav" => 50, "Majumder" => 20, "Mahim" => 60);
    krsort($name);
    foreach ($name as $key => $value) {
        echo "$key => $value <br>";
    }
    echo "<br>";

    ?>
</body>

</html>
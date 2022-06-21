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

    $name = ["name" => 'sourav', "age" => 25];
    // PHP encoded 
    echo json_encode($name);

    $json_value = '{"name" : "sourav", "age" : 29}';
    $obj = json_decode($json_value);
    // $obj = json_decode($json_value , true);
    // echo $obj['name'];
    var_dump($json_value);
    echo "<br>";
    echo $obj->name;
    ?>

</body>

</html>
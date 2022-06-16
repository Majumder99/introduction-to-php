<?php

$products = [
    ["name" => "soap", 'price' => 20],
    ["name" => "chips", 'price' => 25],
    ["name" => "shampoo", 'price' => 35],
    ["name" => "packets", 'price' => 40],
]

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
    <ul>
        <h1>All the products are : </h1>
        <?php foreach ($products as $product) { ?>
            <h2><?php echo $product["name"] ?></h2>
            <p><?php echo $product["price"] ?></p>
        <?php } ?>
    </ul>
</body>

</html>
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

    $url = "www.w3schools.com"; // If use https then it is validate
    $email = "souravmajumder@gmail.com";

    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $url = filter_var($url, FILTER_SANITIZE_URL);

    echo $email . '<br>';
    echo $url . '<br>';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo $email . " is not validate" . "<br>";
    } else {
        echo $email . " is validate" . "<br>";
    }

    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        echo $url . " is not validate" . "<br>";
    } else {
        echo $url . " is validate" . "<br>";
    }

    ?>
</body>

</html>
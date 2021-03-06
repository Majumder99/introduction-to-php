<?php

session_start();

if ($_SERVER['QUERY_STRING'] == 'noname') {
    unset($_SESSION['name']);
    // session_unset();
}

$name = $_SESSION['name'] ?? "Guest";
$gender = $_COOKIE['gender'] ?? 'Unknown';
?>


<head>
    <title>Pizza Hut</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style>
        .brand {
            background-color: #cbb09c !important;
        }

        .brand-text {
            color: #cbb09c !important
        }

        form {
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }

        .red-text {
            color: red;
            font-size: 12px;
        }

        .pizza {
            width: 100px;
            margin: 40px auto -30px;
            display: block;
            position: relative;
            top: -30px;
        }
    </style>
</head>

<body class="grey lighten-4">
    <nav class="white z-depth-0">
        <div class="container">
            <a href="#" class="brand-logo brand-text">Ninja Pizza</a>
            <ul class="right hide-on-small-and-down" id="nax-mobile">
                <li class="grey-text"><?php echo $name; ?></li>
                <li class="grey-text"><?php echo $gender; ?></li>
                <li><a href="../add.php" class="btn brand z-depth-0">Add A PIZZA</a></li>
            </ul>
        </div>
    </nav>
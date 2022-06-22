<?php

//Start the connection
$conn = mysqli_connect('localhost', 'sourav', 'sourav', 'sourav_pizzas');
if (!$conn) {
    echo 'Connection is error' . mysqli_connect_error();
}

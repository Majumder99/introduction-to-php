<?php

$cookie_name = 'user';
$cookie_value = 'Sourav Majumder';

setcookie($cookie_name, $cookie_value, time() + 60, '/');

?>

<html>

<?php

if (!isset($_COOKIE[$cookie_name])) {
    echo 'Cookie is not set';
} else {
    echo $_COOKIE[$cookie_name] . "<br>";
}


?>


</html>
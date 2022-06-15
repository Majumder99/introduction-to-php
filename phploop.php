<?php

$x = 1;
while ($x <= 10) {
    echo "$x <br>";
    $x++;
}
echo "<br>";

for ($i = 0; $i < 10; $i++) {
    echo "$i <br>";
}
echo "<br>";

$age = array("Sourav" => 25, "Majumder" => 55, "Mahim" => 30);

foreach ($age as $key => $value) {
    echo "$key => $value <br>";
}

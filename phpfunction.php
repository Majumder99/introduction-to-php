<?php

declare(strict_types=1);

// function addNumber(int $x, int $y) {
//     return $x + $y;//if we doesn't declare strict then we will get 10
// }
function addNumber(int $x, int $y) {
    return $x + $y; //it will return an error.
}

// echo addNumber(5, "5");//it will return error in strict mode
// echo addNumber(5, 5);


//Default function
function sayHello($name = "Josua", $time = "Morning") {
    echo "Good morning $name and the time is $time <br>";
}

sayHello('sourav', 'evening');
sayHello();

?>


<html>

</html>
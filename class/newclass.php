<?php

class Union {
    // public $email;
    private $name;

    // public function __construct($name = "sourav", $email = "omul@gmail.com") {
    //     $this->email = $email;
    //     $this->name = $name;
    // }

    public function login() {
        echo $this->name . " has been logged";
    }

    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        if (is_string($name) && strlen($name) > 1) {
            $this->name = $name;
        } else {
            echo "Name is not valid";
        }
    }
}

// $user = new Union();

// echo $user->email;
// echo "<br>";
// echo $user->name;

// $seconduser = new Union('Majumder', 'sourav@gmail.com');
// echo $seconduser->email;
// echo "<br>";
// echo $seconduser->name;
// echo "<br>";
// echo $seconduser->login();


$firstuser = new Union();

$firstuser->setName("Sourav");
echo $firstuser->getName();

?>

<html>

</html>
<?php

if (isset($_POST['submit'])) {
    session_start();

    $_SESSION['name'] = $_POST['name'];
    // echo $_SESSION['name'];
    header('Location:http://localhost/phpwithnetninja/project/');
}

?>


<html>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <input type="text" name="name">
    <input type="submit" value="Submit" name="submit">
</form>

</html>
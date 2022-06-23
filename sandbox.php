<?php

if (isset($_POST['submit'])) {

    setcookie('gender', $_POST['gender'], time() + 3600);

    session_start();

    $_SESSION['name'] = $_POST['name'];
    // echo $_SESSION['name'];
    header('Location:http://localhost/phpwithnetninja/project/');
}

?>


<html>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <input type="text" name="name">
    <select name="gender" id="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select>
    <input type="submit" value="Submit" name="submit">
</form>

</html>
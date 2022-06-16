<?php
/// Form validation

// if (isset($_GET['submit'])) {
//     echo $_GET['email'];
//     echo $_GET['title'];
//     echo $_GET['ingredients'];
// }
// if (isset($_POST['submit'])) {
//     echo $_POST['email'];
//     echo $_POST['title'];
//     echo $_POST['ingredients'];
// }

$errors = array('email' => '', 'title' => '', 'ingredients' => '');
$email = $title = $ingredients = '';
if (isset($_POST['submit'])) {
    // echo htmlspecialchars($_POST['email']);
    // echo htmlspecialchars($_POST['title']);
    // echo htmlspecialchars($_POST['ingredients']);

    //Check email
    if (empty($_POST['email'])) {
        // echo 'Email is empty <br>';
        $errors['email'] = 'Email is empty <br>';
    } else {
        // echo htmlspecialchars($_POST['email']);
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // echo "Email must be a valid email address";
            $errors['email'] = "Email must be a valid email address";
        }
    }

    //Check title
    if (empty($_POST['title'])) {
        // echo 'Title is empty <br>';
        $errors['title'] =  'Title is empty <br>';
    } else {
        // echo htmlspecialchars($_POST['title']);
        $title = $_POST['title'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            // echo 'Title must be letters and spaces only <br>';
            $errors['title'] =  'Title must be letters and spaces only <br>';
        }
    }

    //Check ingredients
    if (empty($_POST['ingredients'])) {
        // echo 'Ingredients is empty <br>';
        $errors['ingredients']  = 'Ingredients is empty <br>';
    } else {
        // echo htmlspecialchars($_POST['ingredients']);
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            // echo 'Ingredients must be comma separated <br>';
            $errors['ingredients']  = 'Ingredients must be comma separated <br>';
        }
    }
}
if (array_filter($errors)) {
    echo 'There is error';
} else {
    header('Location : project/index.php');
}
//End of check form

?>

<!DOCTYPE html>
<html lang="en">

<?php include 'project/header.php' ?>
<section class="container grey-text">
    <h4 class="center">Add a Pizza</h4>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="white" method="post">
        <label for="email">Your Email</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>
        <label for="title">Pizza Title</label>
        <div class="red-text"><?php echo $errors['title']; ?></div>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title); ?>">
        <label for="ingredients">Ingredients (comma separetd):</label>
        <div class="red-text"><?php echo $errors['ingredients']; ?></div>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients); ?>">
        <div class="center">
            <input type="submit" value="Submit" name="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>
<?php include 'project/footer.php' ?>


</html>
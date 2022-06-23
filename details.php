<?php

include 'project/config/connection.php';

if (isset($_GET['id'])) {

    $id1 = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "SELECT * FROM pizzas WHERE id = $id1";

    $result = mysqli_query($conn, $sql);

    $pizza = mysqli_fetch_array($result, MYSQLI_ASSOC);

    mysqli_free_result($result);
    mysqli_close($conn);

    // print_r($pizza);
}

?>

<html>
<?php include 'project/header.php'; ?>
<h2>Details</h2>
<div class="container center">
    <?php if ($pizza) : ?>
        <h4><?php echo 'Title is ' . htmlspecialchars($pizza['title']) ?></h4>
        <h4><?php echo 'Created by ' . htmlspecialchars($pizza['email']) ?></h4>
        <h4><?php echo 'Created on  ' . date($pizza['created_at']) ?></h4>
        <h4>Ingredients</h4>
        <p><?php echo $pizza['ingredients'] ?></p>
    <?php else : ?>
        <h4>No such pizza exist</h4>
    <?php endif; ?>
</div>
<?php include 'project/footer.php' ?>

</html>
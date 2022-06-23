<?php

include 'config/connection.php';


//sql command 
$sql = 'SELECT * FROM PIZZAS ORDER BY created_at';

//RUN the query
$result = mysqli_query($conn, $sql);
// Adding associative array to pizzas
$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);
//Free the $result
mysqli_free_result($result);

// print_r($pizzas);

//Close the connection
mysqli_close($conn);


?>

<!DOCTYPE html>
<html lang="en">

<?php include 'header.php' ?>
<h4 class="center grey-text">Pizzas!</h4>
<div class="container">
    <div class="row">
        <?php foreach ($pizzas as $pizza) : ?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <img src="img/pizza.svg" class="pizza" alt="">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title']) ?></h6>
                        <ul><?php foreach (explode(',', $pizza['ingredients']) as $ing) : ?>
                                <li><?php echo htmlspecialchars($ing); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="card-action right-align">
                        <a href="../details.php?id=<?php echo $pizza['id'] ?>" class="brand-text">More Info</a>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>
<?php include 'footer.php' ?>


</html>


<!-- username : sourav
password : sourav -->
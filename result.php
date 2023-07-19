<?php

session_start();
include __DIR__ . '/./functions/random_character_generator.php';
$characters_number = $_SESSION['characters_number'];

?>

<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . '/./components/head.php' ?>

<body>
    <div class="container text-center mt-5 result_container">
        <h1 class="text-success">La tua password e`:</h1>
        <p class="fs-1 text-warning">
            <?= random_password_generator($characters_number) ?>
        </p>
    </div>
</body>

</html>
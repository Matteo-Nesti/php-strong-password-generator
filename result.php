<?php

session_start();
include __DIR__ . '/./functions/random_character_generator.php';
$characters_number = $_SESSION['characters_number'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>La tua password e`:</h1>
    <p>
        <?= random_password_generator($characters_number) ?>
    </p>
</body>

</html>
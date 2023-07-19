<?php

$characters_number = $_GET['characters_number'] ?? '';


include __DIR__ . '/./functions/random_character_generator.php';



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title><?= $page_title ?? 'Generatore super sicuro per password mega-galattiche' ?></title>
</head>

<body>
    <div class="container">

        <form>
            <div class="mb-3">
                <label for="password_generator" class="form-label">Quanti caratteri vuoi per la tua password?</label>
                <input type="number" class="form-control" id="password_generator" name="characters_number">
            </div>

            <button type="submit" class="btn btn-primary">Genera</button>
        </form>

        <h1>La tua password e`:</h1>
        <p><?= random_password_generator($characters_number) ?></p>
    </div>
</body>

</html>
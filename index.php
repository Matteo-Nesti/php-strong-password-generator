<?php

session_start();

$message = '';
$characters_number = $_GET['characters_number'] ?? '';


if ($characters_number && is_numeric($characters_number)) {
    $_SESSION['characters_number'] = $characters_number;
    header("Location:./result.php");
    exit();
} elseif ($characters_number) {
    $message = 'inserisci un valore valido';
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . '/./components/head.php' ?>

<body>
    <div class="container mt-5">

        <form novalidate class="text-center">
            <div class="mb-3 ">
                <label for="password_generator" class="form-label fs-3">
                    inserisci un numero per decidere la lunghezza della tua password
                </label>
                <input type="text" class="form-control w-50 mx-auto" id="password_generator" name="characters_number">
            </div>

            <button type="submit" class="btn btn-lg btn-primary ">Genera</button>
        </form>
        <h2 class="text-center text-danger"><?= $message ?></h2>
    </div>
</body>

</html>
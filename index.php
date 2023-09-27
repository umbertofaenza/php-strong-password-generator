<?php
session_start();

include __DIR__ . "./functions.php";

$password_length_input = $_GET["password-len"] ?? '';
$_SESSION["generated_pwd"] = '';

if ($password_length_input) {
    header('Location: ./generatedpwd.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"
        defer></script>
</head>

<body>

    <div class="container my-5">
        <h1 class="mb-5">Strong Password Generator</h1>

        <!-- form -->
        <form class="w-25">
            <div class="mb-3">
                <label for="password-len" class="form-label">Password length</label>
                <input type="number" name="password-len" min="6" max="25" value="<?= $password_length_input ?? '' ?>"
                    class="
                form-control" id="password-len">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
    <!-- generate pwd -->
    <?php pwd_generator($password_length_input) ?>
</body>

</html>
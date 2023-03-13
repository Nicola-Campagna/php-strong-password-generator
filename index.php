<?php 
include(__DIR__."./functions.php")
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP PASSWORD GENERATOR</title>

</head>

<body>

    <form action="" method="get">
        <label for="password-length">Lunghezza Password:</label>
        <input type="number" id="password-length" name="password-length" min="0" max="12" required>
        <button type="submit">INVIA</button>
    </form>

    <h1>PASSWORD GENERATA: <?= randomPassword($passwordlen)?></h1>





</body>

</html>
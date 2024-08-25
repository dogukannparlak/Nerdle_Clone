<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>number guessing game</title>
</head>
<body>
<form action="" method="POST">
    Your Guest : <label for="guest"></label><input type="number" name="guest" id="guest">
    <input type="submit" value="submit">
</form>
</body>
</html>
<?php
session_start();
if(!isset($_SESSION['tests'])){
    $_SESSION['tests'] = 0;
    $_SESSION['result'] = mt_rand(1, 100);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["guest"])) {
        $guest = $_POST["guest"];
        $_SESSION['tests']++;
        $result = $_SESSION["result"];


        if ($result == $guest) {
            echo "Congratulations! You guessed it right!<br>";
            session_destroy();
        } elseif ($result > $guest) {
            echo "Your guess is lower than the result.<br>";
        }
        elseif ($result < $guest) {
            echo "Your guess is higher than the result.<br>";
        }
        if ($_SESSION['tests'] >= 6) {
            echo "Game over! The correct number was: " . $_SESSION['result'] . "<br>";
            if (session_status() === PHP_SESSION_ACTIVE){
                session_destroy();
            }

        }
    }
}





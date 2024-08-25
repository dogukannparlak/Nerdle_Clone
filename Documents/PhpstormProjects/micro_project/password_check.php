<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post" name="pass" >
    <label>
        <input type="password" name="password" >
    </label>
    <input type="submit" value="gönder">
</form>

</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["password"])) {
        $password = $_POST["password"];
        $errors = [];

        //if( strlen($password) >= 8 &&
        // preg_match('/[A-Z]/',$password) &&  // Büyük harf kontrolü
        //preg_match('/[a-z]/', $password) &&  // Küçük harf kontrolü
        //preg_match('/[0-9]/', $password) ) {

        // echo "şifreniz güçlü ";
        //}

        if (empty($password)) {
            $errors[] = "lütfen şifre giriniz";
        }
        if (strlen($password) < 8) {
            $errors[] = "şifreniz çok kısa";
        }
        if (!preg_match('/[A-Z]/', $password)) {
            $errors[] = "lütfen büyük harf kullanın ";
        }
        if (!preg_match('/[a-z]/', $password)) {
            $errors[] = " lütfen küçük harf kullanın";
        }
        if (!preg_match('/[0-9]/', $password)) {
            $errors[] = " lütfrn sayı kullanın";
        }
        if (empty($errors)) {
            echo "Şifreniz güçlü.";
        } else {
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
        }

    }
}

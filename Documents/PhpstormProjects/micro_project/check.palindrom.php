<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>STRİNG DEĞER ALMA</title>
</head>
<body>
<h2>PALİNDROM MU?</h2>
<form action="" method="post">
    <label for="metin">kontrol etnek istediğiniz metin :</label>
    <input type="text" id="sayı" name="metin" required>
    <input type="submit" value="Gönder">
</form>
</body>
<?php
function ispalindrom($str) {
    $reversed = strrev($str);
    if ($reversed == $str) {
        echo "bu ifade bir palindromdur";
    }
    else{
        echo "bu ifade bir palindrom değildir !!!!";
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if($_POST["metin"]) {
        echo ispalindrom($_POST["metin"]);
    }

}




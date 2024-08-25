<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>STRİNG DEĞER ALMA</title>
</head>
<body>
    <form action="" method="post">
        <label for="metin">ters cevirmek istediğniz metin:</label>
        <input type="text" id="sayı" name="metin" required>
        <input type="submit" value="Gönder">
    </form>
</body>
<?php
function reverse($str)
{
    return strrev($str);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['metin'])){
        echo reverse($_POST['metin']);

    }
}
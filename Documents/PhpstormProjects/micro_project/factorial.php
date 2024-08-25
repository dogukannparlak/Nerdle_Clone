<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>factoriel</title>
</head>
<body>
<h2>Factoriel</h2>
<form action="" method="post">
    <label for="sayi">hangi sayının factorielini öğrenmek istersiniz:</label>
    <input type="text" id="sayi" name="sayi" required>
    <input type="submit" value="Gönder">
</form>
</body>
<?php
function factorial($n)
{
    if ($n<=1) {
        return 1;
    }
    else
   return $n*factorial($n-1);

}


if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(($_POST["sayi"])){
        $sayi = intval($_POST["sayi"]);
        echo "Sonuç : ".factorial($sayi);
    }
}
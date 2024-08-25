<!-- anket_sonucu.php -->
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anket Sonuçları</title>
</head>
<body>
<h1>Anket Sonuçları</h1>
<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["soru1"]) && $_POST["soru1"] == "diğer" && !empty($_POST["soru1_diğer"])) {
        $soru1 = $_POST["soru1_diğer"];
    } else
    {
        $soru1 = isset($_POST['soru1']) ? $_POST['soru1'] : 'YANIT VERİLMEDİ';
    }
    echo "<p>1. Seçilen Programlama Dili: $soru1</p>";
}

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $soru2 = isset($_POST['soru2']) ? $_POST['soru2'] : 'Yanıt vermediniz';
    if (is_array($soru2)){
        echo "<p>2. Hangi tür müzik dinlersiniz: " . implode(", ", $soru2) . "</p>";
    }
    else
        echo "<p>2. Hangi tür müzik dinlersiniz: ".$soru2."</p>";
}

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $soru3 = isset($_POST['soru3']) ? $_POST['soru3'] : 'Yanıt vermediniz';
    if($soru3 == "")
    {
        echo "<p>3. Hangi ülkeye seyahat etmek istersiniz:Yanıt verilmedi </p>";
    }
    else
        echo "<p>3. Hangi ülkeye seyahat etmek istersiniz: $soru3</p>";
}
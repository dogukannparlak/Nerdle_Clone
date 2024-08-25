<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ANKET</title>
</head>
<body>
<h1>Anket Formu</h1>

<form action="anket_sonuc.php" method="POST" name="anket"  >

    <p>1. En sevdiğiniz programlama dili nedir? </p>

    <input type="radio" name="soru1" value="PHP" >
    <label for="php">PHP</label><br>

    <input type="radio" name="soru1" value="Python">
    <label for="Python">Python</label><br>

    <input type="radio" name="soru1" value="Java">
    <label for="Java">Java</label><br>

    <input type="radio" name="soru1" value="C" >
    <label for="c">C</label><br>

    <input type="radio" name="soru1" value="diğer" >
    <label for="diğer">Diğer:</label>
    <input type="text" name="soru1_diğer" value="" >

    <p>2.Hangi müzük türünü dinlersiniz ? </p>
    <input type="checkbox" name="soru2[]" value="rap">
    <label for="rap">Rap</label>
    <input type="checkbox" name="soru2[]" value="rock" >
    <label for="rock">Rock</label>
    <input type="checkbox" name="soru2[]" value="jazz" >
    <label for="jazz">Jazz</label>
    <input type="checkbox" name="soru2[]" value="blues" >
    <label for="blues">Blues</label>
    <input type="checkbox" name="soru2[]" value="pop" >
    <label for="pop">Pop</label>
    <p>3. Hangi ülkeye seyahat etmek istersiniz?</p>

    <label>
        <select name="soru3">
            <option value=""></option>
            <option value="ABD">Amerika Birleşik Devletleri</option>
            <option value="ALMANYA">Almanya</option>
            <option value="AVUSTRALYA">Avustralya</option>
            <option value="BREZİLYA">Brezilya</option>
            <option value="ÇİN">Çin</option>
            <option value="FRANSA">Fransa</option>
            <option value="GÜNEY KORE">Güney Kore</option>
            <option value="HİNDİSTAN">Hindistan</option>
            <option value="İNGİLTERE">İngiltere</option>
            <option value="İSPANYA">İspanya</option>
            <option value="İSVEÇ">İsveç</option>
            <option value="İSVİÇRE">İsviçre</option>
            <option value="İTALYA">İtalya</option>
            <option value="JAPONYA">Japonya</option>
            <option value="KANADA">Kanada</option>
            <option value="MEKSİKA">Meksika</option>
            <option value="NORVEÇ">Norveç</option>
            <option value="RUSYA">Rusya</option>
            <option value="TÜRKİYE">Türkiye</option>
            <option value="YENİ ZELANDA">Yeni Zelanda</option>
        </select>
    </label>


    <input type="submit" value="Gönder">

</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRİME?</title>
</head>
<body>
<h2> İTS PRİME NUMBER ? </h2>
<form action="" method="post">
    <label for="number"> PRİME NUMBER:?</label>
    <input type="number" id="number" name="number">
    <input type="submit" value="gönder">
</form>
</body>
</html>
<?php
function prime($number)
{
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }

    }
    return true;
}
echo prime(7) ? 'prime<br>' : 'not prime<br>';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (($_POST['number'])) {
        $num = intval($_POST["number"]);
        echo "sonuç: " . (prime($num) ? 'prime' : 'not prime');
    }
}
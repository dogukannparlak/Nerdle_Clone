
<?php
session_start();
function pass($x)
{
    $next = $x + 1;
    return $next;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['sayı'])){

        if(!isset($_SESSION['number']))
        {
            $x = $_POST['sayı']; // Initialize $x if it's not set
            $_SESSION['number'] = $x+1;
        }
        else
        {
            $_SESSION['number'] = pass($_SESSION['number']);
        }
        echo "Girdiğiniz sayıdan sonraki sayı: " . $_SESSION['number'];
    }
} else{
    echo "Lütfen bir sayı giriniz";
}



function pass2()
{
    static $n=0;
    echo "<br>".$n;
    $n++;
    return $n;
}
pass2();
pass2();
pass2();
pass2();
pass2();
pass2();








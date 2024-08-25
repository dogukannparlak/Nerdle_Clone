<?php
$ogrenciler = [
    ['isim' => 'Ali', 'yas' => 25],
    ['isim' => 'Veli', 'yas' => 22],
    ['isim' => 'Ayşe', 'yas' => 22],
    ['isim' => 'nur', 'yas' => 25],
];

array_multisort(
    array_column($ogrenciler, 'yas'), SORT_ASC,
    array_column($ogrenciler, 'isim'), SORT_ASC,
    $ogrenciler);

foreach ($ogrenciler as $ogrenci) {
    echo $ogrenci['isim'] ." ".$ogrenci['yas']."<br>";

}
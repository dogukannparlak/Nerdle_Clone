<?php
$dizi1=[];
// $dizi1= array_merge($dizi1,["a","b","c","d","e","f"]);
$dizi1+=[1,2,3,4,5,6,7,8,9];
echo $dizi1[2];
echo "<br>";
echo "------------------------";
echo "<br>";
array_splice($dizi1,0,2);
print_r($dizi1);
echo "<br>";
echo "------------------------";
echo "<br>";
unset($dizi1[3]);
print_r($dizi1);
echo "<br>";
echo "------------------------";
echo "<br>";
$lengthofarray =sizeof($dizi1);
echo $lengthofarray;
echo "<br>";
echo "------------------------";
echo "<br>";
foreach ($dizi1 as $key => $value) {
    echo $value;
    echo "<br>";
}
echo "------------------------";
echo "<br>";
$iller = array(
    'istanbul' => array('Adalar', 'Arnavutköy', 'Ataşehir', 'Avcılar', 'Bağcılar', 'Bahçelievler', 'Bakırköy', 'Başakşehir', 'Bayrampaşa', 'Beşiktaş', 'Beykoz', 'Beylikdüzü', 'Beyoğlu', 'Büyükçekmece', 'Çatalca', 'Çekmeköy', 'Esenler', 'Esenyurt', 'Eyüpsultan', 'Fatih', 'Gaziosmanpaşa', 'Güngören', 'Kadıköy', 'Kağıthane', 'Kartal', 'Küçükçekmece', 'Maltepe', 'Pendik', 'Sancaktepe', 'Sarıyer', 'Silivri', 'Sultanbeyli', 'Sultangazi', 'Şile', 'Şişli', 'Tuzla', 'Ümraniye', 'Üsküdar', 'Zeytinburnu'),
    'kocaeli' => array('Başiskele', 'Çayırova', 'Darıca', 'Derince', 'Dilovası', 'Gebze', 'Gölcük', 'İzmit', 'Kandıra', 'Karamürsel', 'Kartepe', 'Körfez'),
    'aydın' => array('Bozdoğan', 'Buharkent', 'Çine', 'Didim', 'Efeler', 'Germencik', 'İncirliova', 'Karacasu', 'Karpuzlu', 'Koçarlı', 'Köşk', 'Kuşadası', 'Kuyucak', 'Nazilli', 'Söke', 'Sultanhisar', 'Yenipazar'),
    'muğla' => array('Bodrum', 'Dalaman', 'Datça', 'Fethiye', 'Kavaklıdere', 'Köyceğiz', 'Marmaris', 'Menteşe', 'Milas', 'Ortaca', 'Seydikemer', 'Ula', 'Yatağan'),
    'izmir' => array('Aliağa', 'Balçova', 'Bayındır', 'Bayraklı', 'Bergama', 'Beydağ', 'Bornova', 'Buca', 'Çeşme', 'Çiğli', 'Dikili', 'Foça', 'Gaziemir', 'Güzelbahçe', 'Karabağlar', 'Karaburun', 'Karşıyaka', 'Kemalpaşa', 'Kınık', 'Kiraz', 'Konak', 'Menderes', 'Menemen', 'Narlıdere', 'Ödemiş', 'Seferihisar', 'Selçuk', 'Tire', 'Torbalı', 'Urla'),
    'ankara' => array('Akyurt', 'Altındağ', 'Ayaş', 'Bala', 'Beypazarı', 'Çamlıdere', 'Çankaya', 'Çubuk', 'Elmadağ', 'Etimesgut', 'Evren', 'Gölbaşı', 'Güdül', 'Haymana', 'Kahramankazan', 'Kalecik', 'Keçiören', 'Kızılcahamam', 'Mamak', 'Nallıhan', 'Polatlı', 'Pursaklar', 'Sincan', 'Şereflikoçhisar', 'Yenimahalle'),
    'bursa' => array('Büyükorhan', 'Gemlik', 'Gürsu', 'Harmancık', 'İnegöl', 'İznik', 'Karacabey', 'Keles', 'Kestel', 'Mudanya', 'Mustafakemalpaşa', 'Nilüfer', 'Orhaneli', 'Orhangazi', 'Osmangazi', 'Yenişehir', 'Yıldırım'),
    'antalya' => array('Akseki', 'Aksu', 'Alanya', 'Demre', 'Döşemealtı', 'Elmalı', 'Finike', 'Gazipaşa', 'Gündoğmuş', 'İbradı', 'Kaş', 'Kemer', 'Kepez', 'Konyaaltı', 'Korkuteli', 'Kumluca', 'Manavgat', 'Muratpaşa', 'Serik'),
    'eskişehir' => array('Alpu', 'Beylikova', 'Çifteler', 'Günyüzü', 'Han', 'İnönü', 'Mahmudiye', 'Mihalgazi', 'Mihalıççık', 'Odunpazarı', 'Sarıcakaya', 'Seyitgazi', 'Sivrihisar', 'Tepebaşı'),
    'denizli' => array('Acıpayam', 'Babadağ', 'Baklan', 'Bekilli', 'Beyağaç', 'Bozkurt', 'Buldan', 'Çal', 'Çameli', 'Çardak', 'Çivril', 'Güney', 'Honaz', 'Kale', 'Merkezefendi', 'Pamukkale', 'Sarayköy', 'Serinhisar', 'Tavas')
);
foreach ($iller as $il => $ilcelist) {
    echo $il."=<br>";
    $sehir = $ilcelist[0];

    for ($i = 1; $i < count($ilcelist); $i++) {
        echo "-".$ilcelist[$i];
    }
    if ($i<count($ilcelist)+1) {
        echo "<br>";
    }
}
echo "<br>";
echo "------------------------";
echo "<br>";

echo $iller['istanbul'][22];
echo "<br>";
echo "------------------------";
echo "<br>";
$iller2 = array(
    array('istanbul','Adalar', 'Arnavutköy', 'Ataşehir', 'Avcılar', 'Bağcılar', 'Bahçelievler', 'Bakırköy', 'Başakşehir', 'Bayrampaşa', 'Beşiktaş', 'Beykoz', 'Beylikdüzü', 'Beyoğlu', 'Büyükçekmece', 'Çatalca', 'Çekmeköy', 'Esenler', 'Esenyurt', 'Eyüpsultan', 'Fatih', 'Gaziosmanpaşa', 'Güngören', 'Kadıköy', 'Kağıthane', 'Kartal', 'Küçükçekmece', 'Maltepe', 'Pendik', 'Sancaktepe', 'Sarıyer', 'Silivri', 'Sultanbeyli', 'Sultangazi', 'Şile', 'Şişli', 'Tuzla', 'Ümraniye', 'Üsküdar', 'Zeytinburnu'),
    array('kocaeli','Başiskele', 'Çayırova', 'Darıca', 'Derince', 'Dilovası', 'Gebze', 'Gölcük', 'İzmit', 'Kandıra', 'Karamürsel', 'Kartepe', 'Körfez'),
    array('aydın','Bozdoğan', 'Buharkent', 'Çine', 'Didim', 'Efeler', 'Germencik', 'İncirliova', 'Karacasu', 'Karpuzlu', 'Koçarlı', 'Köşk', 'Kuşadası', 'Kuyucak', 'Nazilli', 'Söke', 'Sultanhisar', 'Yenipazar'),
    array('muğla' ,'Bodrum', 'Dalaman', 'Datça', 'Fethiye', 'Kavaklıdere', 'Köyceğiz', 'Marmaris', 'Menteşe', 'Milas', 'Ortaca', 'Seydikemer', 'Ula', 'Yatağan'),
    array('izmir','Aliağa', 'Balçova', 'Bayındır', 'Bayraklı', 'Bergama', 'Beydağ', 'Bornova', 'Buca', 'Çeşme', 'Çiğli', 'Dikili', 'Foça', 'Gaziemir', 'Güzelbahçe', 'Karabağlar', 'Karaburun', 'Karşıyaka', 'Kemalpaşa', 'Kınık', 'Kiraz', 'Konak', 'Menderes', 'Menemen', 'Narlıdere', 'Ödemiş', 'Seferihisar', 'Selçuk', 'Tire', 'Torbalı', 'Urla'),
    array('ankara','Akyurt', 'Altındağ', 'Ayaş', 'Bala', 'Beypazarı', 'Çamlıdere', 'Çankaya', 'Çubuk', 'Elmadağ', 'Etimesgut', 'Evren', 'Gölbaşı', 'Güdül', 'Haymana', 'Kahramankazan', 'Kalecik', 'Keçiören', 'Kızılcahamam', 'Mamak', 'Nallıhan', 'Polatlı', 'Pursaklar', 'Sincan', 'Şereflikoçhisar', 'Yenimahalle'),
    array('bursa','Büyükorhan', 'Gemlik', 'Gürsu', 'Harmancık', 'İnegöl', 'İznik', 'Karacabey', 'Keles', 'Kestel', 'Mudanya', 'Mustafakemalpaşa', 'Nilüfer', 'Orhaneli', 'Orhangazi', 'Osmangazi', 'Yenişehir', 'Yıldırım'),
    array('antalya','Akseki', 'Aksu', 'Alanya', 'Demre', 'Döşemealtı', 'Elmalı', 'Finike', 'Gazipaşa', 'Gündoğmuş', 'İbradı', 'Kaş', 'Kemer', 'Kepez', 'Konyaaltı', 'Korkuteli', 'Kumluca', 'Manavgat', 'Muratpaşa', 'Serik'),
    array('eskişehir','Alpu', 'Beylikova', 'Çifteler', 'Günyüzü', 'Han', 'İnönü', 'Mahmudiye', 'Mihalgazi', 'Mihalıççık', 'Odunpazarı', 'Sarıcakaya', 'Seyitgazi', 'Sivrihisar', 'Tepebaşı'),
    array('denizli','Acıpayam', 'Babadağ', 'Baklan', 'Bekilli', 'Beyağaç', 'Bozkurt', 'Buldan', 'Çal', 'Çameli', 'Çardak', 'Çivril', 'Güney', 'Honaz', 'Kale', 'Merkezefendi', 'Pamukkale', 'Sarayköy', 'Serinhisar', 'Tavas')
);

foreach ($iller2 as $il => $ilcelist) {
    $sehir = $ilcelist[0];
    echo $ilcelist[0].'=<br>';
    for ($i = 1; $i < count($ilcelist); $i++) {
        echo $ilcelist[$i].",";
        }
        if ($i<count($ilcelist)+1) {
            echo "<br>";
    }
}
echo "<br>";
echo "------------------------";
echo "<br>";
$cars = array(
    "McQueen" => "Chevrolet Corvette C6",
    "Mater" => "GMC",
    "Sally" => "Porsche 911",
    "Doc Hudson" => "1951 Hudson Hornet",
    "Ramone" => "1959 Chevrolet Impala",
    "Luigi" => "1959 Fiat 500",
    "Guido" => "İtalyan Forklift",
    "Chick Hicks" => "Dodge Charger veya Ford Fusion",
    "Fillmore" => "Volkswagen Type 2 (Bus)",
    "Sheriff" => "1950's Ford Police Car",
    "Red" => "Fire Truck",

);
echo $cars["McQueen"];
echo "<br>";
echo "------------------------";
echo "<br>";
$cars[]=array(
    "Lizzie" => "1923 Ford Model T",
    "Tex Dinoco" => "1970s Cadillac Eldorado",);
print_r($cars);
echo "<br>";
echo "------------------------";
echo "<br>";
print_r(array_reverse($dizi1));
echo "<br>";
echo "------------------------";
echo "<br>";
sort($dizi1);
print_r($dizi1);
echo "<br>";
echo "------------------------";
echo "<br>";
rsort($dizi1);
print_r($dizi1);
echo "<br>";
echo "------------------------";
echo "<br>";
if (in_array(9,$dizi1))
{
    echo "in array";
}
    else
    {
        echo "isn't in array";
    }

echo "<br>";
echo "------------------------";
echo "<br>";
$array1= [123,"a","b","c"];
$array2= [true,5,];
$array3= array_merge($array1,$array2);
print_r($array3);
echo "<br>";
echo "------------------------";
echo "<br>";
$key = array_rand($cars,2);
echo $key[0]. ":". $cars[$key[0]]. "<br>";
echo $key[1]. ":". $cars[$key[1]]. "<br>";
echo "<br>";
echo "------------------------";
echo "<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$diff = array_diff($a2,$a1);
$diff2 = array_diff($a1,$a2);
print_r($diff);
echo "<br>";
print_r($diff2);
echo "<br>";
echo "------------------------";
echo "<br>";
$diff3 = array_diff_assoc($a1 ,$a2);
print_r($diff3);
echo "<br>";
echo "------------------------";
echo "<br>";
$array1 = array("x" => "apple", "y" => "banana", "z" => "cherry");
$array2 = array("x" => "apple", "y" => "orange", "a" => "cherry");
$result = array_diff_assoc($array1, $array2);
print_r($result);
echo "<br>";
echo "------------------------";
echo "<br>";
function square($n)
{
    return $n*$n;
}
function add($a,$b)
{
return $a + $b;
}
$numbers = array(1,2,3,4,5,6,7,8,9,10);
$numbers2= array(12,13,14,15,16,17,18,19,20,21);
$squared = array_map('square',$numbers);
print_r($squared);
echo "<br>";
echo "------------------------";
echo "<br>";
$adds= array_map('add',$numbers,$numbers2);
print_r($adds);
echo "<br>";
echo "------------------------";
echo "<br>";
function is_even($number) {
    if($number % 2 == 0) {
        echo $number.": is even <br>";
        return true;
    }
    else
    {
        echo $number." : is not even <br> ";
        return false;
    }

}
$even = array_filter($numbers,'is_even');
print_r($even);
echo "<br>";
echo "------------------------";
echo "<br>";


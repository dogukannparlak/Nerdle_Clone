<?php
$countries= array(
    "Europe" => array("France", "Germany", "Italy"),
    "Asia" => array("Japan", "China", "India")
);
foreach ($countries as $continent => $countryList) {
    echo "<h1>$continent:</h1>"."<br>";
    foreach ($countryList as $country) {
        echo "<p> -$country </p>"."<br>" ;
    }
}

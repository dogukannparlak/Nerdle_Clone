<?php
$array1= [1,"a","b","c"];
$array2= [true,5,];
$array3= array_merge($array1,$array2);
print_r($array3);
echo "<br>";
print_r(array_reverse($array3));
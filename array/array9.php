<?php
$country=array("india"=>"new delhi","bhutan"=>"thimphu","maldives"=>"male","qatar"=>"doha","fiji"=>"suva");
print_r($country);
ksort($country);
echo "<br>Array sorted by key (Country) in ascending order:<br>";
print_r($country);

arsort($country);
echo "<br>Array sorted by value (Capital) in descending order:<br>";
print_r($country);
?>
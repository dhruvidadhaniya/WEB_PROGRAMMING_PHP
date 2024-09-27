<?php
$fruits=array("apple","mango","chreery","banana","graps","orange");
print_r($fruits);
echo "<br>";
$asce=$fruits;
sort ($asce);
$dese=$fruits;
rsort ($dese);
echo "<br> fruits in ascending: <br>";
foreach ($asce as $fruits)
{
	echo $fruits."<br>";
}
echo "<br> fruits in desending: <br>";
foreach ($dese as $fruits)
{
	echo $fruits."<br>";
}
?>
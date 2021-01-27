<?php
// 1
$month = ["janvier", "fevrier", "mars", "avril", "mai", "juin", "juillet", "aout", "septembre", "octobre", "novembre", "decembre"];
// 2
echo $month[2]."<br>";
// 3
echo $month[5]."<br>";
// 4
echo $month[7] = "août"."<br>";
// 5
$hdf = ["02" => "Aisne", "59" => "Nord", "60" => "Oise", "62" => "Pas-de-Calais", "80" => "Somme"];
// 6
echo $hdf["59"]."<br>";
// 7
$hdf[51] = "Marne"."<br>";
//8
echo "<br>";
foreach ($month as $item){
    echo "<div>".$item."</div>";
}
//9
echo "<br>";
foreach ($hdf as $item){
    echo "<div>".$item."</div>";
}
//10
echo "<br>";
foreach ($hdf as $key => $item){
    echo "<div>".$key." déparetement : ".$item."</div>";
}

<?php


$d=$_GET["loc"];


$xml = simplexml_load_file("https://api.heimdal.be/loki/?lokaal=$d") or die(include 'frames/index.php');
foreach($xml->lokaal as $lokaal){
$xpunt = $lokaal['x'];
$ypunt = $lokaal['y'];
$naam = $lokaal['naam'];
$up = $lokaal['up'];
$type = $lokaal['type'];
$route = $lokaal['route'];
$afbeelding = $lokaal['afbeelding'];
$door = $lokaal['door'];
$capaciteit = $lokaal['capaciteit'];
$stad = $lokaal['stad'];
$adress = $lokaal['adress'];
$start = $lokaal['start'];
}

if ($type == '') {die(include 'frames/index.php');} 

else {include 'frames/'.$type.'.php';}

?>
<?php
/**
 * file name: functions.php;
 * author: Hanna-Liisa Vilms;
 * date: 08.11.2019;
 */


function tervita($enimi="Hea", $pnimi="Kylaline"){
    return "Tere $enimi $pnimi";
}

echo tervita();
echo "<br>";
echo tervita("Karin", "Eegreid");
echo "<br>";
echo tervita("Imre", "Tard");

echo '<hr>';
//väikseim
echo min(11,21,32,43,54);
echo "<br>";
//suurim
echo max(11,21,32,43,54);
echo "<br>";
//massiivist
$arvud = array(11,21,32,43,54);
echo '<br>'.max($arvud);
//suurim massiivist
$arvud = array(11,21,32,43,54);
echo "<br>";
$arvud2 = array(60,72,42,34,45);
echo max(max($arvud), max($arvud2));
echo '<hr>';

$arv = 3.456;
echo round($arv);
echo "<br>";
echo round($arv,2);
echo "<br>";
echo floor($arv);
echo "<br>";
echo ceil($arv);
echo "<br>".floor($arv);

echo '<hr>';

echo rand();
echo "<br>".mt_rand();
//ulatuse piiramine
echo "<br>".rand(1,200);
echo '<hr>';

//astendamine
echo pow(5,2);
echo '<br>';
//ruutjuur
echo sqrt(9);
echo '<br>';
//pii
echo pi();
echo '<br>';
//trigonomeetria
echo cos(0.8);
echo '<br>';
echo deg2rad(30);
echo '<hr>';
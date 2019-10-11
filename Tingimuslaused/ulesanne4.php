<?php
/**
 * file name: ulesanne4.php;
 * autor: Hanna-Liisa Vilms;
 * date: 10.10.2019;
 */
$hetkeAasta = 2019;
$sunniAasta = 2008;
$vanus = $hetkeAasta - $sunniAasta;
echo 'Oled '.$vanus.' aastat vana<br>';
$jaak = $vanus % 5;

if($jaak == 0){
    echo 'Sel aasta on juubel! Õnnitleme!<br>';
} else {
    echo 'Veel juubelit ei ole<br>';
}
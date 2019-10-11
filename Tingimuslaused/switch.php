<?php
/**
 * file name: switch.php;
 * autor: Hanna-Liisa Vilms;
 * date: 11.10.2019;
 */

$etteAntudArv = 20;
//lubame kasutajal arvata
$kasutajaArv = 10;


//võrdlus
if($etteAntudArv == $kasutajaArv) {
    echo 'Tubli! Arvasid ära<br>';
}
 else {
     //arvud ei ole võrdsed|kas vahemik arvude vahel väiksem v võrdne 5-ga|| kui arvud negatiivsed, teisendame postiivseks.
     $vahemik = abs($kasutajaArv) - $etteAntudArv;
     if ($vahemik <= 5) {
         echo 'Veel ei arvanud ära, kuid oled lähedal!<br>';
     }
     if ($kasutajaArv > $etteAntudArv) {
         echo $kasutajaArv . ' on suurem, kui ette antud arv. <br>';
     } else {
         echo $kasutajaArv . ' on väiksem, kui ette antud arv. <br>';
     }

 }
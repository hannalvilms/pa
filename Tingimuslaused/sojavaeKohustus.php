<?php
/**
 * file name: sojavaeKohustus.php;
 * autor: Hanna-Liisa Vilms;
 * date: 11.10.2019;
 */

$kodakondsus = 'eestlane';
$vanus = 18;
$haridus = 'kutseharidus';

if ($kodakondsus == 'eestlane') {
        //saab kontrollida edasi
        if ($vanus >= 18) {
            if ($haridus == 'pohiharidus' or $haridus == 'kutseharidus' or $haridus == 'korgharidus'){
                echo 'Haridustase on sobilik!<br>';
                echo 'Oled valmis sõjaväekohustuseks!<br>';
            }
            else {
                echo 'Haridustase ei ole piisav.<br>';
            }
        }else {
            echo 'oled veel liiga noor!<br>';
        }
    }else {
        echo  'Riigiseadus ei kohusta sõjaväekohustuseks<br>';
}
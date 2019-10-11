<?php
/**
 * file name: taringuVise.php;
 * autor: Hanna-Liisa Vilms;
 * date: 11.10.2019;
 */

$number = rand(1,7);
var_dump($number);

//switch kontroll
switch ($number){
    case 1:
        echo 'Sinu number on '.$number.'<br>';
        break;
    case 2:
        echo 'Sinu number on '.$number.'<br>';
        break;
    case 3:
        echo 'Sinu number on '.$number.'<br>';
        break;
    case 4:
        echo 'Sinu number on '.$number.'<br>';
        break;
    case 5:
        echo 'Sinu number on '.$number.'<br>';
        break;
    case 6:
        echo 'Sinu number on '.$number.'<br>';
        break;
    default:
        echo 'Midagi läks valesti<br>';
        break;
}
echo 'Sellega on täringuvise tehtud<br>';
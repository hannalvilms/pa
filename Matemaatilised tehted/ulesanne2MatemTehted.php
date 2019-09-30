<?php

/*  Ülesanne 1
Hanna-Liisa Vilms
30.09.19
*/

$x=9;
$y=5;
$liitm = $x + $y;
$lahut = $x - $y;
$korru = $x * $y;
$jagam = $x / $y;
$jaak = $x % $y;
echo 'Liitmine:'.$x.'+'.$y.'='.$liitm.'<br>';
echo 'Lahutamine:'.$x.'-'.$y.'='.$lahut.'<br>';
echo 'Korrutamine:'.$x.'*'.$y.'='.$korru.'<br>';
echo 'Jagamine:'.$x.'/'.$y.'='.$jagam.'<br>';
echo 'Jääk:'.$x.'%'.$y.'='.$jaak.'<br>';
echo '&nbsp;<br>';
echo '&nbsp;<br>';

$faren = 1.8 * $c + 32;
$const = 1.8;
$const2 = 32;
$c = 5;

echo 'Celsius to Fahrenheit: '.$const.'*'.$c.'+'.$const2.'<br>';
printf('Vastus: %0.2f', $faren);
echo '&nbsp;<br>';
echo '&nbsp;<br>';

$pi = 3.14;
$r = 5;
$k = 2;
$umberm = 2 * $pi * $r;
$pindala = $pi * $r * $r;

echo 'Ringi ümbermõõt on:&nbsp;'.$k.'*'.$pi.'*'.$r.'=';
printf ('%0.2f', $umberm);
echo '&nbsp;<br>';
echo 'Ringi pindala on:&nbsp;'.$pi.'*'.$r.'*'.$r.'=';
printf ('%0.2f', $pindala);


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <style>
        thead {
            background-color: gold;
        }
        table,th,td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        table {
            padding: 1rem;
        }
    </style>
</head>
<body>
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

//tabeli väljastamine

echo
'<table>
    <thead>
        <th>Operaator
        <th>Nimetus</th>
        <th>Näide</th>
        <th>Tulemus</th>
        </th>
    </thead>
    <tbody>
    <tr>
        <td>x+y</td>
        <td>Liitmine</td>
        <td>'.$x.'+'.$y.'</td>
        <td>'.$liitm.'</td>
    </tr>
    <tr>
        <td>x-y</td>
        <td>Lahutamine</td>
        <td>'.$x.'-'.$y.'</td>
        <td>'.$lahut.'</td>
    </tr>
    <tr>
        <td>x*y</td>
        <td>Korrutamine</td>
        <td>'.$x.'*'.$y.'</td>
        <td>'.$korru.'</td>
    </tr>
        <tr>
        <td>x/y</td>
        <td>Jagamine</td>
        <td>'.$x.'/'.$y.'</td>
        <td>'.$jagam.'</td>
    </tr>
    <tr>
        <td rowspan="2">x%y</td>
        <td rowspan="2">Jääk</td>
        <td>'.$x.'%'.$y.'</td>
        <td>'.$jaak.'</td>
    </tr>
    <tr>
        <td>5%2</td>
        <td>'.(5%2).'</td>
    </tr>
    </tbody>
</table>
<br>';

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
</body>
</html>
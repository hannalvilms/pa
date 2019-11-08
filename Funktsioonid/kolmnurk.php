<?php
/**
 * file name: kolmurk.php;
 * author: Hanna-Liisa Vilms;
 * date: 08.11.2019;
 */

function kolmnurk($a, $b)
{
    $c = round(sqrt(pow($a, 2) + pow($b, 2)));
    return "Kolmnurga puudu oleva külje pikkus on " . $c . ".";
}

echo kolmnurk(5, 3);
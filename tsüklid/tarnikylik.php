<?php
//ridade ja veergude max
$ridadeArv=7;
$veergudeArv=7;
//ridade määramine ja vahetus
for ($reaNr = 1; $reaNr <= $ridadeArv; $reaNr++) {
    echo $reaNr;
    //veergude määranime + vahetus
    for ($veeruNr = 1; $veeruNr <= $reaNr; $veeruNr++) {
        echo '*';
    }
    echo '<br>';
}
<?php
/**
 * file name: jagamine.php;
 * author: Hanna-Liisa Vilms;
 * date: 08.11.2019;
 */

function jagamine($arv1, $arv2)
{
    if ($arv2 <= 0) {
        return "Arv peab olema nullist suurem!";
    } else {
        return $arv1 / $arv2;
    }
}

echo jagamine(3, 1);
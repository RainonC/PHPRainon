<?php
$tekst='Tore et on september';

echo $tekst;
echo "<br>";
//kõik tähed on väikesed
echo strtolower($tekst);
echo '<br>';
//kõik tähed on suured
echo strtoupper($tekst);
echo "<br>";
//iga sõna algab suure tähega
echo ucwords(strtolower($tekst));
echo '<br>';
//teksti pikkus
echo strlen($tekst);
echo '<br>';
//sõnade arv tekstis
echo str_word_count($tekst);
echo '<br>';
//eraldab lauses alates 4 kokku 5 tähte
echo substr($tekst, 3, 5);
echo '<br>';
//esimesed 4 tähte
echo substr($tekst, 0, 4);
echo '<br>';

//Esimese tühiku asukoht tekstis
echo "Esimese tühiku asukoht tekstis ".strpos($tekst, " ");
echo '<br>';
$otsitav="on";
//leia on asukoht lauses
echo strpos($tekst, $otsitav, 0);
echo '<br>';
//näita kõik sõnad peale esimest
echo substr($tekst, strpos($tekst, " ", 0), strlen($tekst) - strpos($tekst, " ", 0));

//Mõistatus - загадка
//Eesti linn.
//5 подсказок при помощи текстовых функций
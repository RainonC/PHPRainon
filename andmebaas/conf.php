<?php
$servernimi="localhost";
$kasutajanimi="rainonkaska";
$parool="123456";
$andmebaas="rainonkaska";
$yhendus=new mysqli($servernimi, $kasutajanimi, $parool, $andmebaas);
$yhendus->set_charset('UTF8');
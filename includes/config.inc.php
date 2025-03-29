<?php
$ablakcim = array(
    'cim' => 'Telefon nyílvántartó',
);

$fejlec = array(
    'kepforras' => 'logo.png',
    'kepalt' => 'logo',
	'cim' => 'Mini honlap',
	'motto' => ''
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Kővágó Máté'
);

$oldalak = array(
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'Címlap', 'menun' => array(1,1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés / Regisztráció', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
    'uzenet' => array('fajl' => 'uzenet', 'szoveg' => 'Üzenetek', 'menun' => array(0,1)),
    'kepek' => array('fajl' => 'kepek', 'szoveg' => 'Képek', 'menun' => array(0,1)),
    'kepfelform' => array('fajl' => 'kepfelform', 'szoveg' => 'Kép feltöltés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztracio' => array('fajl' => 'regisztracio', 'szoveg' => 'Regisztráció', 'menun' => array(0,0)),
    'kepfel' => array('fajl' => 'kepfel', 'szoveg' => 'Kép feltöltés', 'menun' => array(0,0)),
    'uzenetk' => array('fajl' => 'uzenetk', 'szoveg' => 'Üzenet Küldés', 'menun' => array(0,0)),
    'regisztral2' => array('fajl' => 'regisztral2', 'szoveg' => 'Regisztráció', 'menun' => array(0,0)),
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');

$MAPPA = './images/';
$TIPUSOK = array ('.jpg', '.png');
$MEDIATIPUSOK = array('image/jpeg', 'image/png');
$DATUMFORMA = "Y.m.d. H:i"; 
$MAXMERET = 500*1024;

$servername = "mysql:host=localhost;";
$username = "root";
$password = "";
$dbname="dbname=gyakorlat7";


?>
<?php

require_once 'tabung.php';

$tabung = new Tabung(7, 10);

echo "Nilai PHI adalah ". Tabung::PHI . PHP_EOL;
echo "<br> Jari-jari tabung = ". $tabung->r . PHP_EOL;
echo "<br> Tinggi tabung = ". $tabung->t . PHP_EOL;
echo "<br> Volume tabung = ". $tabung->getVolume() . PHP_EOL;
echo "<br> Luas permukaan tabung = ". $tabung->getLuasPermukaan() . PHP_EOL;
?>
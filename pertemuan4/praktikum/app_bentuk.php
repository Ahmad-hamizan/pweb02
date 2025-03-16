<?php

require_once 'lingkaran.php';

$lingkaran1 = new Lingkaran(8.4);


echo "Nilai PHI adalah ". Lingkaran::PHI . PHP_EOL;
echo "<br> Jari-jari lingkaran 1 = ". $lingkaran1->jari . PHP_EOL;
echo "<br> Luas lingkaran 1 = ". $lingkaran1->getLuas() . PHP_EOL;
echo "<br> Keliling lingkaran 1 = ". $lingkaran1->getKeliling() . PHP_EOL;
echo "<hr>";
$lingkaran1->Cetak() . PHP_EOL;
echo "<br>";

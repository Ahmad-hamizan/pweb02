<?php

$laptop = [
    "asus", "acer", "lenovo", "hp", "dell"
];

//Menambahkan elemen di awal array
array_unshift($laptop, "toshiba", "macbook");

echo "Array setelah di tambah elemen adalah :\n ";
foreach ($laptop as $j) {
    echo $j."<br>";
};
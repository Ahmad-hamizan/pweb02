<?php

$bulan = [
    "jan", "feb", "mar", "apr", "mei", "jun", "jul", "agu", "sep", "okt", "nov", "des"
];

echo "Array sebelum diurutkan :\n ";
print_r($bulan);

// menghapus elemen terakhir array
$nama_terakhir = array_pop($bulan);

//menampilkan array yang di hapus
echo "<br>Elemen yang akan dihapus adalah $nama_terakhir";

//menampilkan array setelah dihapus
echo "<br>Array setelah dihapus adalah :\n ";
print_r($bulan);
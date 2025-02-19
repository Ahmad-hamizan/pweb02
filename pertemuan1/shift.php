<?php

$udud = [
    "sampurna", "surya", "garpit"
];

// menghapus elemen pertama array
$nama_pertama = array_shift($udud);

//menampilkan array yang di hapus
echo "<br>Udud yang akan dihapus adalah $nama_pertama";

//menampilkan array setelah dihapus
echo "<br>Array setelah dihapus adalah :\n ";
foreach ($udud as $r) {
    echo $r."<br>";
};
?>
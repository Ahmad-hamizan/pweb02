<?php

$ar_buah = ["Pepaya", "Mangga", "Pisang", "Jambu"];

echo "Buah yang pertama adalah $ar_buah[0]
";
echo "<br> Buah yang kedua adalah $ar_buah[1]
";
echo "<br> Buah yang ketiga adalah $ar_buah[2]
";
echo "<br> Buah yang keempat adalah $ar_buah[3]
";

// Jumlah buah
echo "<br> Jumlah buah adalah " . count($ar_buah).", yaitu :";

//cetak seluruh buah
echo '<ol>';
foreach ($ar_buah as $buah) {
    echo "<li>".$buah. "</li>";
};
echo '</ol>';

//menambahkan buah
$ar_buah[] = "Durian";

//hapus buah ke-1
unset($ar_buah[1]);

//ubah buah ke-4
$ar_buah[3] = "Nangka";

//cetak seluruh buah setelah perubahan
echo "<br> Buah setelah perubahan adalah :";
echo '<ol>';
foreach ($ar_buah as $buah) {
    echo "<li>".$buah. "</li>";
};
echo '</ol>';

//cetak seluruh buah dengan indexnya
echo '<ul>';
foreach ($ar_buah as $ak => $av) {
    echo "<li> Index :".$ak." Buah ke-$ak adalah $av </li>";
};
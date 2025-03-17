<?php

require_once 'tabung.php';

$tabung = [];

$tabung = new Tabung(7, 10);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../src/output.css">
</head>

<body class="bg-gradient-to-r from-yellow-300 via-red-500 to-pink-500">
    <div class="max-w-5xl mx-auto mt-6 bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-4">Daftar Nilai Tabung</h2>
        <div class="overflow-x-auto">
            <table class="w-full border border-gray-200 rounded-lg">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-2 border">No</th>
                        <th class="p-2 border">Jari-jari</th>
                        <th class="p-2 border">Tinggi</th>
                        <th class="p-2 border">Volume Tabung</th>
                        <th class="p-2 border">Luas Permukaan Tabung</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($tabung as $tbg) {
                        echo "<tr class='text-center hover:bg-gray-100'>";
                        echo "<td class='p-2 border'>" . $nomor . "</td>";
                        echo "<td class='p-2 border'>" . $tabung->r . "</td>";
                        echo "<td class='p-2 border'>" . $tabung->t . "</td>";
                        echo "<td class='p-2 border font-bold'>" . number_format($tabung->getVolume(), 2) . "</td>";
                        echo "<td class='p-2 border font-bold'>" . number_format($tabung->getLuasPermukaan(), 2) . "</td>";
                        echo "</tr>";
                        $nomor++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
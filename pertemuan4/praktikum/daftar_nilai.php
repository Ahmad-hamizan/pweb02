<?php

require_once "nilai_mahasiswa.php";

$data_mhs = [];

// Data Awal
$data_mhs[] = new NilaiMahasiswa("saha", "matkom", 89, 35, 36);
$data_mhs[] = new NilaiMahasiswa("who", "ilkom", 91, 39, 76);
$data_mhs[] = new NilaiMahasiswa("siapa", "jarkom", 89, 81, 96);

// Proses data jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $nama_siswa = $_POST["nama"];
    $matakuliah = $_POST["matakuliah"];
    $nilai_uts = $_POST["nilai_uts"];
    $nilai_uas = $_POST["nilai_uas"];
    $nilai_tugas = $_POST["nilai_tugas"];

    // Buat objek NilaiMahasiswa dan tambahkan ke dalam array
    $data_mhs[] = new NilaiMahasiswa($nama_siswa, $matakuliah, $nilai_uts, $nilai_uas, $nilai_tugas);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Mahasiswa</title>
    <link rel="stylesheet" href="../../src/output.css">
</head>

<body class="bg-gray-100 p-6">
    <div class=" w-1/2 mx-auto bg-gradient-to-r from-cyan-50 to-blue-50 shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-4">Form Input Nilai Mahasiswa</h2>
        <form action="" method="post" class="space-y-4">
            <div>
                <label class="block text-gray-700 font-medium" for="nama">Nama</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="nama" name="nama" type="text" required />
            </div>
            <div>
                <label class="block text-gray-700 font-medium" for="matakuliah">Pilih Mata Kuliah</label>
                <select class="w-full p-2 border border-gray-300 rounded" id="matakuliah" name="matakuliah" required>
                    <option value="Basis Data">Basis Data</option>
                    <option value="Pemrograman Web">Pemrograman Web</option>
                    <option value="Jaringan Komputer">Jaringan Komputer</option>
                </select>
            </div>
            <div>
                <label class="block text-gray-700 font-medium" for="nilai_uts">Nilai UTS</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="nilai_uts" name="nilai_uts" type="number" required />
            </div>
            <div>
                <label class="block text-gray-700 font-medium" for="nilai_uas">Nilai UAS</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="nilai_uas" name="nilai_uas" type="number" required />
            </div>
            <div>
                <label class="block text-gray-700 font-medium" for="nilai_tugas">Nilai Tugas/Praktikum</label>
                <input class="w-full p-2 border border-gray-300 rounded" id="nilai_tugas" name="nilai_tugas" type="number" />
            </div>
            <div>
                <button class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600" name="submit" type="submit">Simpan</button>
            </div>
        </form>
    </div>

    <div class="max-w-5xl mx-auto mt-6 bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-4">Daftar Nilai Mahasiswa</h2>
        <div class="overflow-x-auto">
            <table class="w-full border border-gray-200 rounded-lg">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="p-2 border">No</th>
                        <th class="p-2 border">Nama Lengkap</th>
                        <th class="p-2 border">Mata Kuliah</th>
                        <th class="p-2 border">Nilai UTS</th>
                        <th class="p-2 border">Nilai UAS</th>
                        <th class="p-2 border">Nilai Tugas</th>
                        <th class="p-2 border">Nilai Akhir</th>
                        <th class="p-2 border">Nilai Kelulusan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $nomor = 1;
                    foreach ($data_mhs as $mhs) {
                        echo "<tr class='text-center hover:bg-gray-100'>";
                        echo "<td class='p-2 border'>" . $nomor . "</td>";
                        echo "<td class='p-2 border'>" . $mhs->nama . "</td>";
                        echo "<td class='p-2 border'>" . $mhs->matakuliah . "</td>";
                        echo "<td class='p-2 border'>" . $mhs->nilai_uts . "</td>";
                        echo "<td class='p-2 border'>" . $mhs->nilai_uas . "</td>";
                        echo "<td class='p-2 border'>" . $mhs->nilai_tugas . "</td>";
                        echo "<td class='p-2 border font-bold'>" . number_format($mhs->getNA(), 2) . "</td>";
                        echo "<td class='p-2 border font-bold text-" . ($mhs->kelulusan() == 'Lulus' ? 'green-500' : 'red-500') . "'>" . $mhs->kelulusan() . "</td>";
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
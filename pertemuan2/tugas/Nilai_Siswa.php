<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
</head>
<body>
    <h1>Nilai Siswa :</h1>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama_siswa = $_POST["nama"];
        $matkul = $_POST["matkul"];
        $nilai_uts = $_POST["nilai_uts"];
        $nilai_uas = $_POST["nilai_uas"];
        $nilai_tugas = $_POST["nilai_tugas"];
        
        $keseluruhan = array(
            "nama" => $nama_siswa,
            "matkul" => $matkul,
            "nilai_uts" => $nilai_uts,
            "nilai_uas" => $nilai_uas,
            "nilai_tugas" => $nilai_tugas
        );
    }

    if (!empty($keseluruhan)) {
        echo "<p>Nama Siswa : $nama_siswa</p>";
        echo "<p>Mata Kuliah : $matkul</p>";
        echo "<p>Nilai UTS : $nilai_uts</p>";
        echo "<p>Nilai UAS : $nilai_uas</p>";
        echo "<p>Nilai Tugas : $nilai_tugas</p>";
    }
    else {
        echo "<p>Data tidak lengkap</p>";
    }

    // Kelulusan Nilai

    $rata_rata = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
    echo "<p>Rata-rata : $rata_rata</p>";

    if ($rata_rata >= 56) {
        echo "<p>Kelulusan : Lulus</p>";
    }
    else {
        echo "<p>Kelulusan : Tidak Lulus</p>";
    }

    // Grade Nilai

    $Grade = "";

    if ($nilai_uts >= 85 && $nilai_uas >= 85 && $nilai_tugas >= 85) {
        $Grade = "A";
        echo "<p>Grade : A</p>";
    }
    elseif ($nilai_uts >= 70 && $nilai_uas >= 70 && $nilai_tugas >= 70) {
        $Grade = "B";
        echo "<p>Grade : B</p>";
    }
    elseif ($nilai_uts >= 56 && $nilai_uas >= 56 && $nilai_tugas >= 56) {
        $Grade = "C";
        echo "<p>Grade : C</p>";
    }
    elseif ($nilai_uts >= 36 && $nilai_uas >= 36 && $nilai_tugas >= 36) {
        $Grade = "D";
        echo "<p>Grade : D</p>";
    }
    elseif ($nilai_uts >= 0 && $nilai_uas >= 0 && $nilai_tugas >= 0) {
        $Grade = "E";
        echo "<p>Grade : E</p>";
    }
    else {
        $Grade = "I";
        echo "<p>Grade : I</p>";
    }

    // Predikat Nilai
    switch ($Grade) {
        case "A":
            echo "<p>Predikat : Sangat Memuaskan</p>";
            break;
        case "B":
            echo "<p>Predikat : Memuaskan</p>";
            break;
        case "C":
            echo "<p>Predikat : Cukup</p>";
            break;
        case "D":
            echo "<p>Predikat : Kurang</p>";
            break;
        case "E":
            echo "<p>Predikat : Sangat Kurang</p>";
            break;
        default:
            echo "<p>Predikat : Tidak Ada</p>";
            break;
    }
    ?>
</body>
</html>
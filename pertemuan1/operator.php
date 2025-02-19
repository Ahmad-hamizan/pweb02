<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator</title>
</head>
<body style="margin: 20px; padding: 20px; border: 1px solid #000; width: 300px; height: 300px">
    <form action="" method="post">
        <h1>Operator Aritmatika</h1>
        <br>
        <label for="">Angka 1 :</label>
        <input type="number" name="angka1">
        <br>
        <label for="">Angka 2 :</label>
        <input type="number" name="angka2">
        <br>
        <label for="">Operasi :</label>
        <select name="operasi">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">x</option>
            <option value="bagi">/</option>
            <option value="modulus">%</option>
        </select>
        <br>
        <button type="submit" name="hitung">Hitung</button>
    </form>
 <?php
    if (isset($_POST['hitung'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operasi = $_POST['operasi'];
        $hasil = 0;

        switch ($operasi) {
            case 'tambah':
                $hasil = $angka1 + $angka2;
                break;
            case 'kurang':
                $hasil = $angka1 - $angka2;
                break;
            case 'kali':
                $hasil = $angka1 * $angka2;
                break;
            case 'bagi':
                $hasil = $angka1 / $angka2;
                break;
            case 'modulus':
                $hasil = $angka1 % $angka2;
                break;
        }

        echo "Hasil dari $angka1 $operasi $angka2 = $hasil
        ";

        define('PHI', 3.14);
        $jari = 8;
        $luas = PHI * $jari * $jari;
        $kll = 2 * PHI * $jari;
        echo "Luas lingkaran dengan jari-jari $jari = $luas
        Keliling lingkaran dengan jari-jari $jari = $kll";  
    }
    ?>
</body>
</html>
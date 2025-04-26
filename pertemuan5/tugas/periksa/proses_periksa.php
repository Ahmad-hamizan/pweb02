<?php
// Sertakan file koneksi database
require_once '../db_koneksi.php';

// Cek apakah form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $pasien_id = $_POST['pasien_id'] ?? '';
    $tanggal = $_POST['tanggal'] ?? '';
    $berat = $_POST['berat'] ?? '';
    $tinggi = $_POST['tinggi'] ?? '';
    $tensi = $_POST['tensi'] ?? '';
    $dokter_id = $_POST['dokter_id'] ?? '';

    // Validasi data
    if (empty($tanggal) || empty($tinggi) || empty($tensi)) {
        die("Data penting tidak boleh kosong!");
    }

    $proses = $_POST['proses'] ?? '';

    if ($proses == "Simpan") {
        // Simpan data baru
        $sql = "INSERT INTO periksa (pasien_id, tanggal, berat, tinggi, tensi, dokter_id) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $dbh->prepare($sql);
        // var_dump($sql);
        // exit();
        $stmt->execute([$pasien_id, $tanggal, $berat, $tinggi, $tensi, $dokter_id]);

        header("Location: data_periksa.php");
        exit();
    } elseif ($proses == "Update") {
        // Update data yang ada
        $id = $_POST['id'] ?? 0;
        if ($id <= 0) {
            die("ID tidak valid!");
        }

        $sql = "UPDATE periksa SET tanggal=?, berat=?, tinggi=?, tensi=?, pasien_id=?, dokter_id=? WHERE id=?";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$tanggal, $berat, $tinggi, $tensi, $pasien_id, $dokter_id, $id]);

        header("Location: data_periksa.php");
        exit();
    }
} elseif (isset($_GET['id_hapus'])) {
    // Hapus data
    $id = $_GET['id_hapus'] ?? 0;
    if ($id <= 0) {
        die("ID tidak valid!");
    }

    $sql = "DELETE FROM periksa WHERE id=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id]);

    header("Location: data_periksa.php");
    exit();
} else {
    die("Aksi tidak dikenali!");
}

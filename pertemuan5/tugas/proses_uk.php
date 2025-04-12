<?php
// Sertakan file koneksi database
require_once 'db_koneksi.php';

// Cek apakah form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $kode_unit = $_POST['kode_unit'] ?? '';
    $nama_unit = $_POST['nama_unit'] ?? '';
    $keterangan = $_POST['keterangan'] ?? '';

    // Validasi data
    if (empty($kode_unit) || empty($nama_unit) || empty($keterangan)) {
        die("Data penting tidak boleh kosong!");
    }

    $proses = $_POST['proses'] ?? '';

    if ($proses == "Simpan") {
        // Simpan data baru
        $sql = "INSERT INTO unit_kerja (kode_unit, nama_unit, keterangan) VALUES (?, ?, ?)";
        $stmt = $dbh->prepare($sql);
        // var_dump($kelurahan_id);
        // exit();
        $stmt->execute([$kode_unit, $nama_unit, $keterangan]);

        header("Location: data_uk.php");
        exit();
    } elseif ($proses == "Update") {
        // Update data yang ada
        $id = $_POST['id'] ?? 0;
        if ($id <= 0) {
            die("ID tidak valid!");
        }

        $sql = "UPDATE unit_kerja SET kode_unit=?, nama_unit=?, keterangan=? WHERE id=?";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$kode_unit, $nama_unit, $keterangan, $id]);

        header("Location: data_uk.php");
        exit();
    }
} elseif (isset($_GET['id_hapus'])) {
    // Hapus data
    $id = $_GET['id_hapus'] ?? 0;
    if ($id <= 0) {
        die("ID tidak valid!");
    }

    $sql = "DELETE FROM unit_kerja WHERE id=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id]);

    header("Location: data_uk.php");
    exit();
} else {
    die("Aksi tidak dikenali!");
}

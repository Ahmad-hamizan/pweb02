<?php
// Sertakan file koneksi database
require_once '../db_koneksi.php';

// Cek apakah form disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $kode = $_POST['kode'] ?? '';
    $nama = $_POST['nama'] ?? '';
    $tmp_lahir = $_POST['tmp_lahir'] ?? '';
    $tgl_lahir = $_POST['tgl_lahir'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $email = $_POST['email'] ?? '';
    $alamat = $_POST['alamat'] ?? '';
    $kelurahan_id = $_POST['kelurahan_id'] ?? '';

    // Validasi data
    if (empty($kode) || empty($nama) || empty($tmp_lahir) || empty($tgl_lahir) || empty($gender)) {
        die("Data penting tidak boleh kosong!");
    }

    $proses = $_POST['proses'] ?? '';

    if ($proses == "Simpan") {
        // Simpan data baru
        $sql = "INSERT INTO pasien (kode, nama, tmp_lahir, tgl_lahir, gender, email, alamat, kelurahan_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $dbh->prepare($sql);
        // var_dump($kelurahan_id);
        // exit();
        $stmt->execute([$kode, $nama, $tmp_lahir, $tgl_lahir, $gender, $email, $alamat, $kelurahan]);

        header("Location: data_pasien.php");
        exit();
    } elseif ($proses == "Update") {
        // Update data yang ada
        $id = $_POST['id'] ?? 0;
        if ($id <= 0) {
            die("ID tidak valid!");
        }

        $sql = "UPDATE pasien SET kode=?, nama=?, tmp_lahir=?, tgl_lahir=?, gender=?, email=?, alamat=?, kelurahan_id=? WHERE id=?";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$kode, $nama, $tmp_lahir, $tgl_lahir, $gender, $email, $alamat, $kelurahan, $id]);

        header("Location: data_pasien.php");
        exit();
    }
} elseif (isset($_GET['id_hapus'])) {
    // Hapus data
    $id = $_GET['id_hapus'] ?? 0;
    if ($id <= 0) {
        die("ID tidak valid!");
    }

    $sql = "DELETE FROM pasien WHERE id=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id]);

    header("Location: data_pasien.php");
    exit();
} else {
    die("Aksi tidak dikenali!");
}

<?php
require_once '../db_koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $nama = $_POST['nama'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $tmp_lahir = $_POST['tmp_lahir'] ?? '';
    $tgl_lahir = $_POST['tgl_lahir'] ?? '';
    $kategori = $_POST['kategori'] ?? '';
    $telpon = $_POST['telpon'] ?? '';
    $alamat = $_POST['alamat'] ?? '';
    $unitkerja_id = $_POST['unitkerja_id'] ?? null;

    // Validasi data
    if (empty($nama) || empty($gender) || empty($tmp_lahir) || empty($tgl_lahir) || empty($kategori) || empty($unitkerja_id)) {
        die("Data penting tidak boleh kosong!");
    }

    $proses = $_POST['proses'] ?? '';

    if ($proses == "Simpan") {
        // Simpan data baru
        $sql = "INSERT INTO paramedik (nama, gender, tmp_lahir, tgl_lahir, kategori, telpon, alamat, unitkerja_id) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$nama, $gender, $tmp_lahir, $tgl_lahir, $kategori, $telpon, $alamat, $unitkerja_id]);

        header("Location: data_paramedik.php");
        exit();
    } elseif ($proses == "Update") {
        // Update data yang ada
        $id = $_POST['id'] ?? 0;
        if ($id <= 0) {
            die("ID tidak valid!");
        }

        $sql = "UPDATE paramedik SET 
                nama=?, gender=?, tmp_lahir=?, tgl_lahir=?, 
                kategori=?, telpon=?, alamat=?, unitkerja_id=? 
                WHERE id=?";
        $stmt = $dbh->prepare($sql);
        $stmt->execute([$nama, $gender, $tmp_lahir, $tgl_lahir, $kategori, $telpon, $alamat, $unitkerja_id, $id]);

        header("Location: data_paramedik.php");
        exit();
    }
} elseif (isset($_GET['id_hapus'])) {
    // Hapus data
    $id = $_GET['id_hapus'] ?? 0;
    if ($id <= 0) {
        die("ID tidak valid!");
    }

    $sql = "DELETE FROM paramedik WHERE id=?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id]);

    header("Location: data_paramedik.php");
    exit();
} else {
    die("Aksi tidak dikenali!");
}

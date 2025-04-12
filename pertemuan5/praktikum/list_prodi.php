<?php

require_once 'dbkoneksi.php';

// define query (1)
$sql = "SELECT * FROM prodi ORDER BY id DESC";

// eksekusi query (2)
$rs = $dbh->query($sql);

// tampilkan hasil query (3)
// foreach ($rs as $row) {
//     echo "<br>".$row->id." - ".$row->kode." - ".$row->nama." - ".$row->kaprodi;
// }

?>

<h2>Data Program Studi</h2>
<a href="form_prodi.php">Tambah Data</a>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Nama</th>
        <th>Kaprodi</th>
        <th>Aksi</th>
    </tr>
    <?php
    $nomor = 1;
    foreach ($rs as $row) { ?>
        <tr>
            <td><?= $nomor ?></td>
            <td><?= $row->kode ?></td>
            <td><?= $row->nama ?></td>
            <td><?= $row->kaprodi ?></td>
            <td>
                <a href="form_prodi.php?id=<?= $row->id ?>">Edit</a>
                <a href="proses_prodi.php?id_hapus=<?= $row->id ?>">Hapus</a>
            </td>
        </tr>
    <?php $nomor++;
    } ?>
</table>
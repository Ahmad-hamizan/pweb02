<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Selamat Belajar PHP</h1>
    <?php
        $_nama = "Budi";
        $_umur = 20;
        $_prodi = "Teknik Informatika";
        $_IPK = 3.5;
    ?>
    <p>Nama: <?php echo $_nama; ?></p>
    <p>Umur: <?=$_umur?></p>
    <p>Prodi: <?=$_prodi?></p>
    <p>IPK: <?=$_IPK?></p>
</body>
</html>
<?php

// Class Persegi panjang
class PersegiPanjang
{
    public $panjang;
    public $lebar;

    // Konstuktor persegi panjang
    function __construct($panjang, $lebar)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    // Method M=emnghitung luas
    function getLuas()
    {
        $luasPP = $this->panjang * $this->lebar;
        return $luasPP;
    }

    // Method menghitung keliling
    function getKeliling()
    {
        $kelilingPP = 2.0 * ($this->panjang + $this->lebar);
        return $kelilingPP;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include_once 'top.php'; ?>
    <div id="page-content-wrapper">
        <!-- Top navigation -->
        <?php include_once 'menu.php'; ?>

        <div class="section">
            <h2>Contoh Penggunaan Persegi Panjang</h2>

            <?php
            $pp = new PersegiPanjang(10, 8);

            echo "panjang : $pp->panjang <br>" . PHP_EOL;
            echo "lebar : $pp->lebar <br>" . PHP_EOL;
            echo "<hr>";
            echo "luas :" . $pp->getLuas() .  "<br>" . PHP_EOL;
            echo "luas :" . $pp->getKeliling() .  "<br>" . PHP_EOL;
            ?>
        </div>
        <?php include_once 'bottom.php'; ?>
    </div>
</body>

</html>
<?php

/**
 * Class Lingkaran
 */
class Lingkaran {
    public $jari = 10;
    public const PHI = 3.14;

    public function __construct($jari)
    {
        $this->jari = $jari;
    }

    public function getLuas() {
        $luas = self::PHI * $this->jari * $this->jari;
        return $luas;
    }

    public function getKeliling() {
        $keliling = 2.0 * self::PHI * $this->jari;
        return $keliling;
    }

    public function Cetak() {
        echo "Lingkaran dengan jari-jari " . $this->jari . " memiliki luas " . $this->getLuas() . " dan keliling " . $this->getKeliling();
    }
}
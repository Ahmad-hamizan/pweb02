<?php

/**
 * Class Tabung
 */
class Tabung
{
    public $r;
    public $t;
    public const PHI = 3.14;

    public function __construct($r, $t)
    {
        $this->r = $r;
        $this->t = $t;
    }

    public function getVolume() {
        $volume = 3.14 * $this->r * $this->r * $this->t;
        return $volume;
    }

    public function getLuasPermukaan() {
        $luasPermukaan = 2 * 3.14 * $this->r * ($this->r + $this->t);
        return $luasPermukaan;
    }

    public function Cetak() {
        echo "Tabung dengan jari-jari " . $this->r . " dan tinggi " . $this->t . " memiliki volume " . $this->getVolume() . " dan luas permukaan " . $this->getLuasPermukaan();
    }
}
?>
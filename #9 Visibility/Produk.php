<?php

class Produk {
    public 
        $judul,
        $penulis,
        $penerbit;

    protected $diskon = 0;
    private $harga;

    public function __construct($judul = "judul", $penulis = "penulis",$penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this-> penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis",$penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
        $str = "Komik: " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis",$penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getInfoProduk() {
        $str = "Game: " . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
        return $str;
    }
}


$produk1 = new Komik("Jinapa", "Gitana Sari", "fafa", 2000, 20);
$produk2 = new Game("Gevasiga", "Guna Tama", "fufu", 25000, 21);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk2->harga = 90243567543;
$produk2->setDiskon(50);
echo $produk2->getHarga();

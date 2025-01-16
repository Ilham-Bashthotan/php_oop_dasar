<?php

class Produk {
    public 
        $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman, 
        $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis",$penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this-> penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduct() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class Komik extends Produk {
    public function getInfoKomik() {
        $str = "Komik: {$this->getInfoProduct()} - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public function getInfoGame() {
        $str = "Game: {$this->getInfoProduct()} - {$this->waktuMain} Jam.";
        return $str;
    }
}


$produk1 = new Komik("Jinapa", "Gitana Sari", "fafa", 2000, 20, 0);
$produk2 = new Game("Gevasiga", "Guna Tama", "fufu", 25000, 0 , 21);

echo $produk1->getInfoKomik();
echo "<br>";
echo $produk2->getInfoGame();
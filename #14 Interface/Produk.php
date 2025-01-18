<?php

interface InfoProduk {
    public function getInfoProduk();
}

abstract class Produk {
    protected 
        $judul,
        $penulis,
        $penerbit,
        $diskon = 0,
        $harga;

    public function __construct($judul = "judul", $penulis = "penulis",$penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this-> penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul) {
        if (!is_string($judul)) {
            throw new Exception("Judul harus string");
        }
        $this->judul = $judul;
    }
    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }
    public function getpenulis() {
        return $this->penulis;
    }

    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }
    public function getpenerbit() {
        return $this->penerbit;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    
    abstract public function getInfo();
}

class Komik extends Produk implements InfoProduk{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis",$penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk() {
        $str = "Komik: " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
    
}

class Game extends Produk implements InfoProduk {
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis",$penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfo() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk() {
        $str = "Game: " . $this->getInfo() . " - {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk {
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk) {
        $this->daftarProduk[] = $produk;
    }
    public function cetak() {
        $str = "Daftar Produk:<br>";

        foreach($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()}<br>";
        }
        return $str;
    }
}

$produk1 = new Komik("Jinapa", "Gitana Sari", "fafa", 2000, 20);
$produk2 = new Game("Gevasiga", "Guna Tama", "fufu", 25000, 21);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

// $produk2 = new Produk();
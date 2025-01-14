<?php

class Produk {
    public 
        $judul,
        $penulis,
        $penerbit,
        $harga;

    public function __construct($judul = "judul", $penulis = "penulis",$penerbit = "penerbit",$harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this-> penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk("Jinapa", "Gitana Sari", "fafa", 2000);

$produk2 = new Produk("Gevasiga", "Guna Tama", "fufu", 25000);

$produk3 = new Produk();

echo "<hr>";
echo "Komik: " . $produk1->getLabel();
echo "<br>";
echo "Game: " . $produk2->getLabel();
echo "<hr>";
var_dump($produk3);
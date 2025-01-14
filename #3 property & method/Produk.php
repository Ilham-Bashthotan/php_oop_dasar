<?php

class Produk {
    public 
        $judul = "judul", 
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "heg";
// var_dump($produk2->judul);

$produk3 = new Produk();
$produk3->judul = "Jinapa";
$produk3->penulis = "Gitana Sari";
$produk3->penerbit = "fafa";
$produk3->harga = 2000;
var_dump($produk3);

echo "Komik : $produk3->judul, $produk3->penulis, $produk3->penerbit, $produk3->harga";
echo "<br>";

echo $produk3->getLabel();

echo "<hr>";

$produk4 = new Produk();
$produk4->judul = "Gevasiga";
$produk4->penulis = "Guna Tama";
$produk4->penerbit = "fufu";
$produk4->harga = 25000;
echo "Komik: " . $produk3->getLabel();
echo "<br>";
echo "Game: " . $produk4->getLabel();

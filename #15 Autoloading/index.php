<?php

require_once 'App/init.php';

$produk1 = new Komik("Jinapa", "Gitana Sari", "fafa", 2000, 20);
$produk2 = new Game("Gevasiga", "Guna Tama", "fufu", 25000, 21);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

// $produk2 = new Produk();
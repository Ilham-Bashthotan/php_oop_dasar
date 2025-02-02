<?php

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
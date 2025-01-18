<?php

// cara 1
define("NAMA", "Ilham"); // tidak dapat di class
echo NAMA;
echo "<br>";

// cara 2
const UMUR = 18;
echo UMUR;
echo "<hr>";

class Coba {
    const HALO = "HALO";
}

echo COBA::HALO;
echo "<hr>";

// magic constant
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";

function coba() {
    return __FUNCTION__;
}
echo coba();
echo "<br>";

class Coba2 {
    public $kelas = __CLASS__;
}

$obj = new Coba2;
echo $obj->kelas;
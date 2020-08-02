<?php

// define('NAMA', 'ibnudirsan'); // Tidak bisa simpan di dalam sebuah class. Sebagai Contstanta Global.

// echo NAMA;

// echo "<br>";

// const UMUR = 29; // Bisa di simpan didalam class. Sehingga bisa di gunakan pada konsep OOP.
// echo UMUR;

class Coba {
    // define('NAMA', 'ibnudirsan'); //Error
    const NAMA = 'ibnudirsan';
}

echo Coba::NAMA;
echo "<br>";

// Magic Constant pada PHP 
// echo __LINE__;
// echo __FILE__;
// echo __DIR__;
// echo __FUNCTION__;
// echo __CLASS__;
// echo __METHOD__;
// echo __NAMESPACE__;
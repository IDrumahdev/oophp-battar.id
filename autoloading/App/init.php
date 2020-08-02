<?php
// Cara Pertama 
// require_once 'Produk/infoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// Akan menjadi banyak jika class nya sudah Komplek.



// Cara Kedua
spl_autoload_register(function($class){
    require_once __DIR__ . '/Produk/' .$class. '.php'; //function ini akan melihat ada class apa saja yg sudah di register
});



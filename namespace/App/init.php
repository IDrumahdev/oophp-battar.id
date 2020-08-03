<?php
// Cara Pertama 
// require_once 'Produk/infoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';
// Akan menjadi banyak jika class nya sudah Komplek.


// require_once 'Service/User.php'; //Ketika ada class yang namanya sama persis maka PHP akan menganggap class tersebut sama padahal beda,
// di saat ini lah butuh namespace. (Bug :  Fatal error: Cannot declare class User, because the name is already in use in C:\wamp64\www\oophp\namespace\App\Service\User.php on line 2)


// Cara Kedua
spl_autoload_register(function($class){
    // App\Service\User menjadi array ["App", "Service", "Produk"] => akan mengambil User saja.
    $class = explode('\\', $class); //karena $class berisi nama namespace nya maka di pecah dengan function explode untuk mendapatkan nama classnya.
    $class = end($class);//mengambil nama element terakhir Array dari $class yang terakhir.
    require_once __DIR__ . '/Produk/' .$class. '.php'; //function ini akan melihat ada class apa saja yg sudah di register
});


spl_autoload_register(function($class){
    // App\Service\User menjadi array ["App", "Service", "Produk"] => akan mengambil User saja.
    $class = explode('\\', $class); //karena $class berisi nama namespace nya maka di pecah dengan function explode untuk mendapatkan nama classnya.
    $class = end($class);//mengambil nama element terakhir Array dari $class yang terakhir.
    require_once __DIR__ . '/Service/' .$class. '.php'; //function ini akan melihat ada class apa saja yg sudah di register
});


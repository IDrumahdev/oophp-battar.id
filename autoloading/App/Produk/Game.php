<?php
class Game extends Produk implements infoProduk { // implements infoProduk kedalam class child Game.
    public $waktuMain;
    
    public function __construct($judul ="Judul",$penulis ="penulis",$penerbit ="penerbit",$harga =0,$waktuMain=0){

        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->waktuMain = $waktuMain;
    
    }

    //Implementasi Method abstract dari class Parent (Class Produk).
    public function getInfo() {
        $str = "{$this->judul} | {$this->getLable()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk(){
        $str = "Game : ". $this->getInfo() ." ~ {$this->waktuMain} Jam."; // mengambil data dari method getInfo pada class Produk. // Sudah di Implements.
        return $str;
    }

    public function setDiskon( $diskon ){
        $this->diskon = $diskon;
    }
}
// ====================================================================== Class Child================================================
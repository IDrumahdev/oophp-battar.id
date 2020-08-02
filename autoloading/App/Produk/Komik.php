<?php
class Komik extends Produk implements infoProduk { // implements infoProduk kedalam class child Komik.
    public $jmlHalaman;

    public function __construct($judul ="Judul",$penulis ="penulis",$penerbit ="penerbit",$harga =0,$jmlHalaman=0){
        
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->jmlHalaman = $jmlHalaman;
        
    }

    //Implementasi Method abstract dari class Parent (Class Produk).
    public function getInfo() {
        $str = "{$this->judul} | {$this->getLable()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk(){
        $str = "Komik : ". $this->getInfo() ." - {$this->jmlHalaman} Halaman."; // mengambil data dari method getInfo pada class Produk. // Sudah di Implements.
        return $str;
    }
}
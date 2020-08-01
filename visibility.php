<?php

class Produk {
    public      $judul,
                $penulis,
                $penerbit;
                // $harga; // Diganti visibility nya ke Private. //
    protected   $diskon = 0; // Hanya dapat diakses oleh Class Parent dan Class Child nya saja (Produk atau Komik atau Game).

    private     $harga; //hanya bisa di akses oleh Class Parent (produk).

    public function __construct($judul ="Judul",$penulis ="penulis",$penerbit ="penerbit",$harga =0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLable(){
        return "$this->penulis, $this->penerbit";
    }
    
    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLable()} (Rp. {$this->harga})";
        return $str;
    }

    public function getHarga(){
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLable()} (Rp. {$produk->harga})";
        return $str;
    }
}

// Instantiasi class Produk
$produk1 = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30000,100);
$produk2 = new Game("Uncharted","Neil Druckman","Sony Computer",250000,50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

echo "<hr>";
// $produk2->harga = 300;
// echo $produk2->getHarga();
// $produk2->harga; // dapat akses harga walaupun di luar dari class karena $harga visibility nya Public (Codingan Sebelumnya)
$produk2->setDiskon(50);
echo $produk2->getHarga();


class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul ="Judul",$penulis ="penulis",$penerbit ="penerbit",$harga =0,$jmlHalaman=0){
        
        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->jmlHalaman = $jmlHalaman;
        
    }

    public function getInfoProduk(){
        $str = "Komik : ". parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;
    
    public function __construct($judul ="Judul",$penulis ="penulis",$penerbit ="penerbit",$harga =0,$waktuMain=0){

        parent::__construct($judul,$penulis,$penerbit,$harga);
        $this->waktuMain = $waktuMain;
    
    }

    public function getInfoProduk(){
        $str = "Game : ". parent::getInfoProduk() ." ~ {$this->waktuMain} Jam.";
        return $str;
    }

    public function setDiskon( $diskon ){
        $this->diskon = $diskon;
    }
}
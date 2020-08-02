<?php

class Produk {
    private     $judul, // Ganti visibility dari Public ke Private.
                $penulis,
                $penerbit,
                $harga;

    protected   $diskon = 0; // Diskon di gunakan untuk class Game karena itu di buat protected.

    // private     $harga; //harga sudah bisa di pindahkan ke visibility private karena sudah di getter dan setter.

    public function __construct($judul ="Judul",$penulis ="penulis",$penerbit ="penerbit",$harga =0){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


    // ===============================================================Getter And Setter==============================================
    public function getJudul(){
        return $this->judul;
    }
    // Catatan : Karena tidak bisa mengakses Judul secara langsung disebebkan visibility nya private maka buat function baru getJudul.

    public function setJudul($judul){
        
        if(!is_string($judul)){
            throw new Exception("Judul Harus String");
            
        }
            $this->judul = $judul;
    }


    public function getPenulis(){
        return $this->penulis;
    }
    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }
    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }
    // ===============================================================Getter And Setter==============================================



    public function getLable(){
        return "$this->penulis, $this->penerbit";
    }
    

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLable()} (Rp. {$this->harga})";
        return $str;
    }


    // =====================================================Getter And Setter Penambahan dari Tutorial sebelumnya====================
    public function setHarga($harga){
        $this->harga = $harga; // yang tambil bukan harga dasar tapi harga setelah di diskon. karena ada rumus diskon sebelum nilai di kembalikan ke webroser.
    }
    public function getHarga(){
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }
    // =====================================================Getter And Setter Penambahan dari Tutorial sebelumnya====================

}

class CetakInfoProduk {
    public $daftarProduk = array(); // Property untuk menampung daftar produk yang akan di cetak.

    public function tambahProduk( Produk $produk ) { //memakai object tipe untuk memasukan produk yang baru ke Property $daftarProduk.
        $this->daftarProduk[] = $produk;
    }

    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLable()} (Rp. {$produk->harga})";
        return $str;
    }
}

// ====================================================================== Class Child================================================
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
// ====================================================================== Class Child================================================


// Instantiasi class Produk
$produk1 = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30000,100);
$produk2 = new Game("Uncharted","Neil Druckman","Sony Computer",250000,50);
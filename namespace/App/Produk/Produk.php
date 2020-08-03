<?php
abstract class Produk { // karena membuat interface infoProduk maka Class Produk tidak bisa menjadi class abstract.
    protected   $judul, // visibility ke protected karena membuat class abstract
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

    abstract public function getInfo(); // Membuat Method abstract.

    // public function getInfo() { // Di pindahkan ke setiap class turunannya (class child / Komik dan Game).
    //     $str = "{$this->judul} | {$this->getLable()} (Rp. {$this->harga})";
    //     return $str;
    // }



    // =====================================================Getter And Setter Penambahan dari Tutorial sebelumnya====================
    public function setHarga($harga){
        $this->harga = $harga; // yang tambil bukan harga dasar tapi harga setelah di diskon. karena ada rumus diskon sebelum nilai di kembalikan ke webroser.
    }
    public function getHarga(){
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }
    // =====================================================Getter And Setter Penambahan dari Tutorial sebelumnya====================

}
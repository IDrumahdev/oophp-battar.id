<?php
class CetakInfoProduk {
    public $daftarProduk = array(); // Property untuk menampung daftar produk yang akan di cetak.

    public function tambahProduk( Produk $produk ) { //memakai object tipe untuk memasukan produk yang baru ke Property $daftarProduk.
        $this->daftarProduk[] = $produk;
    }

    public function cetak() {//function cetak mendapat data dari tambahProduk
        $str = "Daftar Produk : <br>";

        foreach ( $this->daftarProduk as $p) { // Looping mengambil daftar produk satu per satu.
            $str .= "- {$p->getInfoProduk()} <br>"; // $p adalah object produk, bisa langsung saja mengambil method getInfoProduk() dari class child nya.
        }

        return $str;
    }
}
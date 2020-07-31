<?php

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct($judul ="Judul",$penulis ="penulis",$penerbit ="penerbit",$harga =0){
        //merupakan sebuah method spesial (khusus) karena method yang otomatis di jalankan ketika sebuah class di Instantiasi (Objek) nya.
        // ketika kita membuat objek dengan keyword new , pada saat itu juga ada sebuah method yang di jalankan yaitu constructor.
        // echo "Assalamu'alaikum";
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLable(){
        return "$this->penulis, $this->penerbit";
        //fungsi $this untuk mengambil property yang ada di dalam class yang bersangkutan ketika di buat Instant.
        // jika tidak ada $this maka akan error karena pada PHP Lingkup variable (scope variavel -- tata cara penulisan property sama dengan tata cara penulisan variable)
        // menulis variable di dalam function artinya untuk variable di function tersebut saja, bukan mengambil dari luar, untuk mengambil
        // isi dari property di dalam kelas harus menambahkan $this.
    }

}


$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump",30000);
// $produk1->judul = "Naruto";
// $produk1->penulis = "Masashi Kishimoto";
// $produk1->penerbit = "Shonen Jump";
// $produk1->harga = 30000;



$produk2 = new Produk("Uncharted","Neil Druckman","Sony Computer",250000);
// $produk2->judul = "Uncharted";
// $produk2->penulis = "Neil Druckman";
// $produk2->penerbit = "Sony Computer";
// $produk2->harga = 250000;

$produk3 = new Produk("Dragon Ball");


echo "<br>";
echo "Komik : " .$produk1->getLable();
echo "<br>";
echo "Game :  " .$produk2->getLable();
echo "<br>";
// echo "Game :  " .$produk3->getLable();
// var_dump($produk3);
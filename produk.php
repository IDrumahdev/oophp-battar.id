<?php
//Jualan Produk
//Komik
//Game

class Produk {
    public  $judul ="Judul",
            $penulis ="penulis",
            $penerbit="penerbit",
            $harga=0;

//Method adalah function yang di dalam class
    // public function sayHello(){
    //     return "Assalamu'alaikum";
    // }

    public function getLable(){
        return "$this->penulis, $this->penerbit";
        //fungsi $this untuk mengambil property yang ada di dalam class yang bersangkutan ketika di buat Instant.
        // jika tidak ada $this maka akan error karena pada PHP Lingkup variable (scope variavel -- tata cara penulisan property sama dengan tata cara penulisan variable)
        // menulis variable di dalam function artinya untuk variable di function tersebut saja, bukan mengambil dari luar, untuk mengambil
        // isi dari property di dalam kelas harus menambahkan $this.
    }

}
// Instant dari $produk1
    // $produk1 = new Produk();
    // $produk1->judul = "Naruto";
    // var_dump($produk1);

    // $produk2 = new Produk();
    // $produk2->judul = "Uncharted";
//Property yang belum ada (TambahProperty) 
    // $produk2->TambahProperty = "PropertyNew";
    // var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;



$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

// echo "Komik : $produk3->judul, $produk3->penulis";
// var_dump($produk3);
echo "<br>";
// echo $produk3->sayHello();
echo "Komik : " .$produk3->getLable();
echo "<br>";
echo "Game :  " .$produk4->getLable();
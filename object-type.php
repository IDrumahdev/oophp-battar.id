<?php

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $ikhwan,
            $akwat;

    public function __construct($judul ="Judul",$penulis ="penulis",$penerbit ="penerbit",$harga =0,$ikhwan="Laki-Laki",$akhwat="Perempuan"){
        // Construct merupakan sebuah method spesial (khusus) karena method yang otomatis di jalankan ketika sebuah class di Instantiasi (Objek) nya,
        // ketika kita membuat objek dengan keyword new , pada saat itu juga ada sebuah method yang di jalankan yaitu constructor.
        // echo "Assalamu'alaikum";
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->ikhwan=$ikhwan;
        $this->akhwat=$akhwat;
    }

    public function getLable(){
        return "$this->penulis, $this->penerbit";
        //fungsi $this untuk mengambil property yang ada di dalam class yang bersangkutan ketika di buat Instant.
        // jika tidak ada $this maka akan error karena pada PHP Lingkup variable (scope variabel 
        // -- tata cara penulisan property sama dengan tata cara penulisan variable)
        // menulis variable di dalam function artinya untuk variable di function tersebut saja, bukan mengambil dari luar, untuk mengambil
        // isi dari property di dalam kelas harus menambahkan $this.
    }

    public function jkikhwan(){
        return "$this->ikhwan";
    }
    public function jkakhwat(){
        return "$this->akhwat";
    }

    public function sapaan($jk){
        if($jk=="laki-laki"){
            $sapa = "Bapak";
        }elseif($jk=="Perempuan"){
            $sapa ="Ibu";
        }
        return $sapa;
    } 
    
}

class CetakInfoProduk {
    public function cetak(Produk $produk) {
        // Agar supaya fungsi cetak ini menerima spesifik dari class produk sehingga 
        // Produk adalah (type nya) di gunakan untuk indetifikasi class produk yang di Instantiasi.
        // $produk adalah parameter (variabel) dari object ($produk1,$produk2 dan seterusnya).
        $str = "{$produk->judul} | {$produk->getLable()} (Rp. {$produk->harga})";
        return $str;
    }
}

// Instantiasi class Produk
$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump",30000);
$produk2 = new Produk("Uncharted","Neil Druckman","Sony Computer",250000);
echo "<br>";
echo "Komik : " .$produk1->getLable();
echo "<br>";
echo "Game :  " .$produk2->getLable();
echo "<br>";

// buat $infoproduk1 variabel baru untuk Instantiasi Class CetakInfoProduk.
$infoproduk1 = new CetakInfoProduk();
// panggil $infoproduk1 variabel untuk menjalankan method cetak dengan memasukan parameter variabel dari object.
echo $infoproduk1->cetak($produk1);
echo "<br>";
$jeniskelamin = new Produk();
echo $jeniskelamin->jkikhwan();
echo "<br>";
$inisial = new produk();
echo $inisial->sapaan("laki-laki");
echo "<br>";
$parsing = "Perempuan";
echo $inisial->sapaan($parsing);
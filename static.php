<?php

echo "Hasil Static Keyword";
class ContohStatic {
    public static $angka = 1;


    public static function  halo() {
        return "Halo " .self::$angka++." Kali.";
    }
}

echo "<br>";
echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";
echo ContohStatic::halo();
echo "<hr>";


echo "<br>";
echo "Hasil OOP Dasar";
class Contoh{
    public $angka = 1;

    public function halo() {
        return "Halo " . $this->angka++. " Kalo.";
    }
}

echo "<br>";
echo "<hr>";
$obj1 = new Contoh;
echo $obj1->halo();
echo "<br>";
echo $obj1->halo();
echo "<br>";
echo $obj1->halo();

echo "<hr>";
$obj2 = new Contoh;
echo $obj2->halo();
echo "<br>";
echo $obj2->halo();
echo "<br>";
echo $obj2->halo();



echo "<hr>";
echo "<br>";
echo "Hasil OOP dengan Static Keyword";
class ContohBaru{
    public static $angkabaru = 1;

    public function halo() {
        return "Halo " . self::$angkabaru++. " Kalo.";
    }
}

echo "<br>";
echo "<hr>";
$obj3 = new ContohBaru;
echo $obj3->halo();
echo "<br>";
echo $obj3->halo();
echo "<br>";
echo $obj3->halo();

echo "<hr>";
$obj4 = new ContohBaru;
echo $obj4->halo();
echo "<br>";
echo $obj4->halo();
echo "<br>";
echo $obj4->halo();

// Catatan : 
// Untuk Static Keyword tidak menggunakan $this namun menggunakan self pada class nya.
// Untuk Static Keyword nilai Property akan selalu melanjutkan/selalu tetap walaupun di panggil dengan nama class nya ataupun di instantiasi objectnya.
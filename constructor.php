<?php


class Produk {
     public $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga =  0;

    public function __construct( $judul, $penulis, $penerbit, $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this ->harga = $harga;
    }
    
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}


$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2  = new Produk("Uncharted", "Neil Drucmann", "Sony Computer", 250000);


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
<?php 
// OOP DASAR pada PHP #5 - Object Type

// Constructor => method khusus yang dijalankan secara otomatis setiap membuat instance dari sebuah kelas/membuat object baru

class Produk {
  public $judul,
          $penulis,
          $penerbit,
          $harga = 0;

  public function __construct($judul = 'Judul', $penulis ='Penulis', $penerbit = 'Penerbit', $harga = 0) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }
}


class CetakInfoProduk {
  public function cetak(Produk $produk) {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}



$produk1 = new Produk('Naruto', 'Masasi Kishimoto', 'Shonen Jump', 30_000);
$produk2 = new Produk('Uncharted', 'Neil Druckman', 'Sony Computer', 250_000);
$produk3 = new Produk('Dragon Ball');

echo 'Komik : ' . $produk1->getLabel();
echo '<br>';
echo 'Game : ' . $produk2->getLabel();
echo '<br>';

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
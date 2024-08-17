<?php 
// OOP DASAR pada PHP #6 - Inheritance (Bagian 2)

// Inheritance
  # Menciptakan hierarki antar class (parent & child)
  # Child class, mewarisi semua properti dan method dari parent-nya (yang visible)
  # Child Class, memperluas (extends) fungsionalitas dari parent-nya

  class Produk {
    public $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain;
  
    public function __construct($judul = 'Judul', $penulis ='Penulis', $penerbit = 'Penerbit', $harga = 0, $jmlHalaman = 0, $waktuMain = 0) {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
      $this->jmlHalaman = $jmlHalaman;
      $this->waktuMain = $waktuMain;
    }
  
    public function getLabel() {
      return "$this->penulis, $this->penerbit";
    }
  
    public function getInfoProduk() {
      $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
      
      return $str;
    }
  }
  

  class Komik extends Produk {
    public function getInfoProduk() {
      $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";

      return $str;
    }
  }
  

  class Game extends Produk {
    public function getInfoProduk() {
      $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam.";

      return $str;
    }
  }
  
  


  
  $produk1 = new Komik('Naruto', 'Masasi Kishimoto', 'Shonen Jump', 30_000, 100, 0);
  $produk2 = new Game('Uncharted', 'Neil Druckman', 'Sony Computer', 250_000, 0, 50);
  
  echo $produk1->getInfoProduk();
  echo '<br>';
  echo $produk2->getInfoProduk();
?>
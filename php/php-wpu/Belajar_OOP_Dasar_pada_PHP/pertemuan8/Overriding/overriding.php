<?php 
// OOP DASAR pada PHP #8 - Overriding

// Inheritance
  # Menciptakan hierarki antar class (parent & child)
  # Child class, mewarisi semua properti dan method dari parent-nya (yang visible)
  # Child Class, memperluas (extends) fungsionalitas dari parent-nya

  class Produk {
    public $judul,
            $penulis,
            $penerbit,
            $harga;
  
    public function __construct($judul = 'Judul', $penulis ='Penulis', $penerbit = 'Penerbit', $harga = 0) {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
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
    public $jmlHalaman;

    public function __construct($judul = 'Judul', $penulis ='Penulis', $penerbit = 'Penerbit', $harga = 0, $jmlHalaman = 0) {

      parent::__construct($judul, $penulis, $penerbit, $harga);

      $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk() {
      $str = 'Komik : ' . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";

      return $str;
    }
  }
  

  class Game extends Produk {
    public $waktuMain;

    public function __construct($judul = 'Judul', $penulis ='Penulis', $penerbit = 'Penerbit', $harga = 0, $waktuMain = 0) {

      parent::__construct($judul, $penulis, $penerbit, $harga);

      $this->waktuMain = $waktuMain;
      
    }

    public function getInfoProduk() {
      $str = 'Game : ' . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";

      return $str;
    }
  }
  
  


  
  $produk1 = new Komik('Naruto', 'Masasi Kishimoto', 'Shonen Jump', 30_000, 100);
  $produk2 = new Game('Uncharted', 'Neil Druckman', 'Sony Computer', 250_000, 50);
  
  echo $produk1->getInfoProduk();
  echo '<br>';
  echo $produk2->getInfoProduk();
?>
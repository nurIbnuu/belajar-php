<?php 
// OOP DASAR pada PHP #6 - Inheritance (Bagian 1)

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
            $waktuMain,
            $tipe;
  
    public function __construct($judul = 'Judul', $penulis ='Penulis', $penerbit = 'Penerbit', $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe) {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
      $this->jmlHalaman = $jmlHalaman;
      $this->waktuMain = $waktuMain;
      $this->tipe = $tipe;
    }
  
    public function getLabel() {
      return "$this->penulis, $this->penerbit";
    }
  
    public function getInfoLengkap() {
      // Komik : Naruto | Mashashi Kishimoto, Shonen Jump (Rp. 300000) - 100 Halaman.
      $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
      
      if ($this->tipe == 'Komik') {
        $str .= " - {$this->jmlHalaman} Halaman.";
      } elseif ($this->tipe == 'Game') {
        $str .= " ~ {$this->waktuMain} Jam.";
      }
  
      return $str;
    }
  }
  
  
  
  $produk1 = new Produk('Naruto', 'Masasi Kishimoto', 'Shonen Jump', 30_000, 100, 0, 'Komik');
  $produk2 = new Produk('Uncharted', 'Neil Druckman', 'Sony Computer', 250_000, 0, 50, 'Game');
  
  echo $produk1->getInfoLengkap();
  echo '<br>';
  echo $produk2->getInfoLengkap();
?>
<?php 
// OOP DASAR pada PHP #9 - Visibility

// Visibility (Acces Modifier)
  # Konsep yang bisa digunakan untuk mengatur akses dari property dan method pada sebuah objek
  
  # Ada 3 keyword visibility: public, protected, private
    # public, dapat digunakan di mana saja, bahkan di luar kelas
    # protected, hanya dapat digunakan di dalam sebuah kelas beserta turunannya/child
    # private, hanya dapat digunakan di dalam sebuah kelas tertentu saja/kelas yang ada property atau method yang menggunakan visibility private

  # Kenapa perlu menerapkan visibility?
    # Hanya memperlihatkan aspek dari class yang dibutuhkan oleh 'client'. Ketika property dan method tidak digunakan di mana-mana mengapa pakai public? karena hal itu maka property dan method bisa diakses dari luar.
    # Menentukan kebutuhan yang jelas untuk object
    # Memberikan kendali pada kode untuk menghindari 'bug'


  class Produk {
    public $judul,
            $penulis,
            $penerbit;
            // $diskon = 0; # public $diskon

    protected $diskon = 0;

    // protected $harga;
    private $harga;
  
    public function __construct($judul = 'Judul', $penulis ='Penulis', $penerbit = 'Penerbit', $harga = 0) {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
    }
  
    public function getLabel() {
      return "$this->penulis, $this->penerbit";
    }

    // private $harga;
    public function getHarga() {
      return $this->harga - ($this->harga * ($this->diskon / 100));
    } # property harga bisa diakses oleh kelas yang terdapat property harga/parent/kelas ini saja

  
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

    // protected $harga;
   /*  public function getHarga() {
      return $this->harga;
    } */ # property harga bisa diakses oleh kelas Produk dan turunannya

    
    public function setDiskon($diskon) {
      $this->diskon = $diskon;
    } # yang ada method diskon hanya class Game, maka Komik tidak bisa di diskon

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
  echo '<hr>';

/*   $produk2->judul = 'Charted'; # masalah jika visibility public adalah bisa diubah. Jangan biarkan sesuatu di luar class bisa mengubah isi propery kita
  echo $produk2->judul; # bisa diakses di mana saja karena property judul visibilitynya public
  echo '<br>'; */

// echo $produk2->getHarga(); # mengakses harga yang visibilitynya protected

// ketika property diskonnya public
// $produk2->diskon = 90; # maka bisa diubah menjadi 90%, untuk itu ubah visibilitynya menjadi protected(jika method setDiskon disimpan di class child) atau private
// misal yang boleh ada diskonnya hanya yang Game
// $produk2->setDiskon(50); # diskon 50%

// $produk1->setDiskon(80); # error karena class Komik tidak punya method setDiskon
$produk2->setDiskon(80); # diskon 50%
echo $produk2->getHarga(); # = 125000
?>
<?php 
// OOP DASAR pada PHP #14 - Abstract Class (bagian 2)

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


  // setter dan getter untuk menghindari ketika membuat property public, sebaiknya tidak membiarkan bagian luar dari kelas untuk mengakses property langsung untuk itu visibilitynya harus protected/private

  // kita buttuh method untuk membaca(get) atau mengubah(set)

  // property harus protected/private

  // Mengapa harus pakai Setter dan Getter, supaya bisa melakukan sesuatu di dalam method Setter atau Getter(misal Validasi yang boleh diinputkan hanya string)




      // Lebih baik membuat 1 kelas dalam 1 file
      // Jika tidak pernah menginstansiasi kelas Produk maka jadikanlah kelas abstrak(ini merupakan keputusan perancangan)


  abstract class Produk { // kelas abstrak
    private $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon;


    public function __construct($judul = 'Judul', $penulis ='Penulis', $penerbit = 'Penerbit', $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
      }

    // Setter & Getter Penulis
    public function setJudul($judul) {
      // Validasi
      if(!is_string($judul)) {
        throw new Exception('Judul Harus String'); # menampilkan Error 'Judul Harus String'
      }
      $this->judul = $judul;
    }
    public function getJudul() { # Getter
      return $this->judul;
    }
    
    // Setter & Getter Penulis
    public function setPenulis($penulis) {
      $this->penulis = $penulis;
    }
    public function getPenulis() {
      return $this->penulis;
    }
    
    // Setter & Getter Penerbit
    public function setPenerbit($penerbit) {
      $this->penerbit = $penerbit;
    }
    public function getPenerbit() {
      return $this->penerbit;
    }

    
    // Agar diskon lebih fleksibel untuk barang apapun maka method setDiskon disimpan di class Produk, sehingga property diskon visibilitynya jadi private
    public function setDiskon($diskon) { # set nilai (setter)
      $this->diskon = $diskon;
    }
    public function getDiskon() {
      return $this->diskon;
    }


    // Setter & Getter Harga
    public function setHarga($harga) {
      $this->harga = $harga;
    }
    // getHarga menampilkan harga setelah didiskon
    public function getHarga() { # melihat nilai (getter)
      return $this->harga - ($this->harga * ($this->diskon / 100));
    } # property harga bisa diakses oleh kelas yang terdapat property harga/parent/kelas ini saja

    public function getLabel() {
      return "$this->penulis, $this->penerbit";
    }

  
    abstract public function getInfoProduk(); // method abstract
    
    public function getInfo() {
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
      $str = 'Komik : ' . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";

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

    public function getInfoProduk() {
      $str = 'Game : ' . $this->getInfo() . " ~ {$this->waktuMain} Jam.";

      return $str;
    }
  }




  class CetakInfoProduk {
    public $daftarProduk = [];

    public function tambahProduk(Produk $produk) {
      $this->daftarProduk[] = $produk;
    }

    public function cetak() {
      $str = "Daftar Produk : <br>";

      foreach($this->daftarProduk as $p) {
        $str .= "- {$p->getInfoProduk()} <br>";
      }

      return $str;
    }
  }
  
  


  
  $produk1 = new Komik('Naruto', 'Masasi Kishimoto', 'Shonen Jump', 30_000, 100);
  $produk2 = new Game('Uncharted', 'Neil Druckman', 'Sony Computer', 250_000, 50);


  $cetakProduk = new CetakInfoProduk;
  $cetakProduk->tambahProduk($produk1);
  $cetakProduk->tambahProduk($produk2);

  echo $cetakProduk->cetak();





















  
  // echo $produk1->getInfoProduk();
  // echo '<br>';
  // echo $produk2->getInfoProduk();
  // echo '<hr>';

/*   $produk2->judul = 'Charted'; # masalah jika visibility public adalah bisa diubah. Jangan biarkan sesuatu di luar class bisa mengubah isi propery kita
  echo $produk2->judul; # bisa diakses di mana saja karena property judul visibilitynya public
  echo '<br>'; */

// echo $produk2->getHarga(); # mengakses harga yang visibilitynya protected

// ketika property diskonnya public
// $produk2->diskon = 90; # maka bisa diubah menjadi 90%, untuk itu ubah visibilitynya menjadi protected(jika method setDiskon disimpan di class child) atau private
// misal yang boleh ada diskonnya hanya yang Game
// $produk2->setDiskon(50); # diskon 50%

// $produk1->setDiskon(80); # error karena class Komik tidak punya method setDiskon
// $produk2->setDiskon(80); # diskon 50%
// echo $produk2->getHarga(); # = 125000

// echo '<hr>';

// $produk3 = new Produk('BarangBaru');
// echo $produk3->judul; # tidak bisa mengakses property private dari luar

// Penggunaan Setter
// $produk1->setJudul('JudulBaru');
// $produk1->setPenulis('PenulisBaru');
// $produk1->setPenerbit('PenerbitBaru');

// // Penggunaan Getter
// echo $produk1->getJudul();
// echo '<br>';
// echo $produk1->getPenulis();
// echo '<br>';
// echo $produk1->getPenerbit();
// echo '<br>';


// Magic method Setter & Getter
// __set & __get
?>
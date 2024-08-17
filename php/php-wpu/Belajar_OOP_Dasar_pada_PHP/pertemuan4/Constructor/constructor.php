<?php 
// OOP DASAR pada PHP #4 - Constructor

// Constructor => method khusus yang dijalankan secara otomatis setiap membuat instance dari sebuah kelas/membuat object baru

  class Produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga = 0;

    public function __construct($judul = 'Judul', $penulis = 'Penulis', $penerbit = 'Penerbit', $harga = 0) {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
    }

    public function getLabel() {
      return "$this->penulis, $this->penerbit";
    }
  
  }

$produk1 = new Produk('Naruto', 'Masasi Kishimoto', 'Shonen Jump', 30_000);
$produk2 = new Produk('Uncharted', 'Neil Druckman', 'Sony Computer', 250_000);
$produk3 = new Produk('Dragon Ball');

echo 'Komik : ' . $produk1->getLabel();
echo '<br>';
echo 'Game : ' . $produk2->getLabel();
echo '<br>';
var_dump($produk3);
/* D:\xampp\htdocs\php\php-wpu\Belajar_OOP_Dasar_pada_PHP\pertemuan4\constructor.php:31:
object(Produk)[3]
  public 'judul' => string 'Dragon Ball' (length=11)
  public 'penulis' => string 'Penulis' (length=7)
  public 'penerbit' => string 'Penerbit' (length=8)
  public 'harga' => int 0 */
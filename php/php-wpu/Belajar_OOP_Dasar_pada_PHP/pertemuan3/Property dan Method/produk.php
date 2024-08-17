<?php 
// OOP DASAR pada PHP #3 - Property dan Method


// Jualan Produk
# Komik
# Game

/* class Produk {
  public $judul,
         $penulis,
         $penerbit,
         $harga;

}

$produk1 = new Produk();

var_dump($produk1); */
/* D:\xampp\htdocs\php\php-wpu\Belajar_OOP_Dasar_pada_PHP\pertemuan3\produk.php:20:
object(Produk)[1]
  public 'judul' => null
  public 'penulis' => null
  public 'penerbit' => null
  public 'harga' => null */


  class Produk {
    public $judul = 'judul',
           $penulis = 'penulis',
           $penerbit = 'penerbit',
           $harga = 0;


/*     public function sayHello () {
      return 'Hello World';
    } */

    public function getLabel() {
      return "$this->penulis, $this->penerbit";
    }
  
  }
  
  $produk1 = new Produk();
  
  // var_dump($produk1);
  /* D:\xampp\htdocs\php\php-wpu\Belajar_OOP_Dasar_pada_PHP\pertemuan3\produk.php:38:
object(Produk)[1]
  public 'judul' => string 'judul' (length=5)
  public 'penulis' => string 'penulis' (length=7)
  public 'penerbit' => string 'penerbit' (length=8)
  public 'harga' => string '0' (length=1) */

  // cara memanggil property
  $produk1->judul = 'Naruto';
  // var_dump($produk1);
  /* D:\xampp\htdocs\php\php-wpu\Belajar_OOP_Dasar_pada_PHP\pertemuan3\produk.php:47:
object(Produk)[1]
  public 'judul' => string 'Naruto' (length=6)
  public 'penulis' => string 'penulis' (length=7)
  public 'penerbit' => string 'penerbit' (length=8)
  public 'harga' => string '0' (length=1) */

  $produk2 = new Produk();
  $produk2->judul = 'Uncharted';
  // var_dump($produk2->judul);
  /* D:\xampp\htdocs\php\php-wpu\Belajar_OOP_Dasar_pada_PHP\pertemuan3\produk.php:57:string 'Uncharted' (length=9) */
  
  // menambah property baru
  // $produk2->tambahProperty = 'New Property';


  $produk3 = new Produk();
  $produk3->judul = 'Naruto';
  $produk3->penulis = 'Masahi Kishimoto';
  $produk3->penerbit = 'Shonen Jump';
  $produk3->harga = 30_000;

  // echo "Komik : $produk3->penulis, $produk3->penerbit";   // Komik : Masahi Kishimoto, Shonen Jump

  $produk4 = new Produk();
  $produk4->judul = 'Uncharted';
  $produk4->penulis = 'Neil Drukmann';
  $produk4->penerbit = 'Sonny Computer';
  $produk4->harga = 250_000;




  // cara memanggil method
  // echo $produk3->sayHello(); // Komik : Masahi Kishimoto, Shonen Jump
  // echo $produk3->getLabel(); // Masahi Kishimoto, Shonen Jump
  echo 'Komik : '. $produk3->getLabel();
  echo '<br>';
  echo 'Game : '. $produk4->getLabel();
/*   Komik : Masahi Kishimoto, Shonen Jump
  Game : Neil Drukmann, Sonny Computer
*/
<?php 

// require_once 'App/Produk/InfoProduk.php';
// require_once 'App/Produk/Produk.php';
// require_once 'App/Produk/Komik.php';
// require_once 'App/Produk/Game.php';
// require_once 'App/Produk/CetakInfoProduk.php';
  // jika program semakin besar maka require semakin banyak

require_once 'App/init.php';



// $produk1 = new Komik('Naruto', 'Masasi Kishimoto', 'Shonen Jump', 30_000, 100);
// $produk2 = new Game('Uncharted', 'Neil Druckman', 'Sony Computer', 250_000, 50);


// $cetakProduk = new CetakInfoProduk;
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();


// echo '<hr>';

// new Coba;

// alias namespace; ketikan namespace terlalu panjang
use App\Service\User as ServiceUser; // menggunakan kelas App\Service\User
use App\Produk\User as ProdukUser;

new ServiceUser(); // Ini adalah kelas App\Service\User

echo '<br>';

new ProdukUser(); // Ini adalah kelas App\Produk\User
<?php 

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';

// Auto Loading
// spl_autoload_register();
// spl => standard php library;


spl_autoload_register(function($class) {
  require_once __DIR__ . '/Produk/' . $class. '.php';
  // require_once __DIR__ . 'Produk/' . $class. '.php'; lebih lengkap
});

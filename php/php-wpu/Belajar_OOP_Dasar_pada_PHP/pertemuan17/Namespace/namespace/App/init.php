<?php 

// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';

// require_once 'Produk/User.php';
// require_once 'Service/User.php';

// Auto Loading
// spl_autoload_register();
// spl => standard php library;


spl_autoload_register(function($class) {
  // App\Produk\User = ['App', 'Produk', 'User']
  $class = explode('\\', $class);
  $class = end($class);

  require_once __DIR__ . '/Produk/' . $class. '.php';
  // require_once __DIR__ . 'Produk/' . $class. '.php'; lebih lengkap

  // require_once __DIR__ . '/Service/' . $class. '.php'; // Error
});

spl_autoload_register(function($class) {
    // App\Service\User = ['App', 'Service', 'User']
    $class = explode('\\', $class);
    $class = end($class);

  require_once __DIR__ . '/Service/' . $class. '.php';
  // require_once __DIR__ . 'Produk/' . $class. '.php'; lebih lengkap

  // require_once __DIR__ . '/Service/' . $class. '.php'; // Error
});

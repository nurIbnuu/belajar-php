<?php 
// OOP DASAR pada PHP #12 - Constant

  // Constanta = sebuah identifier untuk menyimpan nilai, pengertian ini mirip dengan Variable tapi NILAInya tidak dapat berubah sampai program selesai.

    // DI LUAR class
  // cara membuat Constanta di PHP; 1. define(), 2. const
  define('NAMA', 'Ibnu');
  const UMUR = 18;
    // cara mengakses Constanta
    echo NAMA;
      echo '<br>';
    echo UMUR;
      echo '<hr>';

    // DI DALAM class
  // perbedaan membuat Constanta; define() dan const
    # Jika mengoding menggunakan OOP maka define() TIDAK BISA DIPAKAI DI DALAM CLASS, tapi SIMPAN define() di luar class sebagai Constanta global. const bisa dipakai di dalam class.
      class Coba {
        // define('NAMA', 'Ibnu'); # error
        const NAMA = 'Ibnu'; # bisa
      }
      // cara mengakses Constanta yang ada di dalam class sama seperti static
      echo Coba::NAMA;
        echo '<hr>';



  // Magic Constant PHP
    # __LINE__ => mengetahui __LINE__ ditulis di baris berapa 
      echo __LINE__; // 31
        echo '<hr>';

    # __FILE__ => mengetahui alamat file yang bersangkutan; bisa dipakai untuk menampilkan pesan kesalahan
      echo __FILE__; // D:\xampp\htdocs\php\php-wpu\Belajar_OOP_Dasar_pada_PHP\pertemuan12\constant.php
        echo '<hr>';

    # __DIR__ => mengetahui directory yang bersangkutan
      echo __DIR__; // D:\xampp\htdocs\php\php-wpu\Belajar_OOP_Dasar_pada_PHP\pertemuan12
        echo '<hr>';
        
    # __FUNCTION__ => mengetahui sedang berada di function apa
      function coba() {
        return __FUNCTION__;
      }
      echo coba(); // coba
        echo '<hr>';

    # __CLASS__ => mengetahui sedang berada di class apa
      class Coba1 {
        public $kelas = __CLASS__;
      }
      $obj = new Coba1;
      echo $obj->kelas; // Coba1
        echo '<hr>';

    # __TRAIT__
    # __METHOD__
    # __NAMESPACE__


?>
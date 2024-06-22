<?php
// Variable Scope

// Variable scope = cakupan variable bisa diakses
//  3 Jenis variable scope; 1. global, 2. local, 3. static



//    1. global
// Variabel yang dibuat di luar function. Hanya bisa diakses dari luar function, secara default tidak bisa diakses di dalam function. Apabila hendak mengakses dari dalam function maka bisa menggunakan kata kunci 'global' atau menggunakan variable khusus $GLOBALS. Contoh:

// $name = 'Nur';
// function hello() {
//  global $name; ATAU 
//  echo $GLOBALS['name'] . PHP_EOL;
// }
// hello(); Nur



//    2. local
// Variabel yang dibuat di dalam function. Hanya bisa diakses dari dalam function 'itu sendiri'. Otomatis dihapus setelah program keluar dari function, jadi pastikan tidak menyimpan data penting di dalam local variabel. Contoh:

// function hello() {
//   $name = 'Nur';
//   echo $name . PHP_EOL; // Bisa
// }
// hello(); Nur
// echo $name . PHP_EOL; // Error

// function test() {
//   echo $name . PHP_EOL; // Error
// }
// test(); // Error



//    3. static
// Dibuat dengan kata kunci 'static'. Nilai tidak dihapus walau program keluar dari function. Bisa digunakan untuk mempertahankan nilai yang disimpan di dalam function. Contoh:

// function counter() {
//   $count = 0;
//   $count++;
//   echo $count . PHP_EOL;
// }
// counter(); // 1
// counter(); // 1
// counter(); // 1

// function counter() {
//   static $count = 0;
//   $count++;
//   echo $count . PHP_EOL;
// }
// counter(); // 1
// counter(); // 2
// counter(); // 3
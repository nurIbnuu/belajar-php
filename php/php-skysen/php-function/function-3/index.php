<?php
// Return

// 1. Agar mau mengembalikan nilai maka function harus diberi kata kunci 'return', karena secara default function tidak mengembalikan nilai.
// 2. Hanya bisa mengembalikan 1 tipe data, jika ingin lebih dari 1 tipe data maka bisa menggunakan array atau object.

// 3. function ini hanya memiliki tugas menampilkan ke layar
// function total(int $a, int $b) {
//   echo $a + $b;
// }
// total(1, 2);

// 4. function ini bertugas mengembalikan nilai ke pemanggil function, selanjutnya pemanggil function yang menentukan hasilnya mau digunakan untuk apa
function total(int|float $a, int $b) : int|float {
  // return '10';
  return $a + $b;
}
// 5. hasil dari pengembalian function biasa ditampung dalam variable
$result = total('1.8', 2); // 7. "string" '1.8' dikonversi ke dalam bentuk "integer"
// var_dump(total('a', 'b')); // 8. "string" 'a', 'b' dikonversi ke dalam bentuk "integer", jika tidak bisa maka akan keluar pesan error
var_dump($result);

// 6. return value juga bisa diatur tipe datanya
// function total(int $a, int $b) : int
var_dump(total(1, 2));
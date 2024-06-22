<?php
// Reference (&)

// Menggunakan Reference agar variabel merujuk ke bagian memory yang sama dengan variable lain. Gunakan simbol &. Contoh:
// $a = 1;
// $b = &$a;
// echo "Sebelum berubah nilai\n";
// echo "a = $a\n"; a = 1
// echo "b = $b\n"; b = 1
// $a = 2;
// echo "Setelah berubah nilai\n";
// echo "a = $a\n"; a = 2
// echo "b = $b\n"; b = 2

// $a = 1;
// $b = &$a;
// echo "Sebelum berubah nilai\n";
// echo "a = $a\n";
// echo "b = $b\n";
// $b = 2; // Jika yang dirubah variael b, hasilnya seperti yang di atas
// echo "Setelah berubah nilai\n";
// echo "a = $a\n";
// echo "b = $b\n";

// $a = 1;
// $b = &$a;
// echo "Sebelum berubah nilai\n";
// echo "a = $a\n"; a = 1
// echo "b = $b\n"; b = 1
// unset($a); // Jika salah satu variabel dihapus, misal variabel a
// echo "Setelah berubah nilai\n";
// echo "a = $a\n"; a =   , variabel a sudah tidak dikenal
// echo "b = $b\n"; b = 1 , variabel b masih bisa mengakses nilai 1.

// $a = 1;
// $b = &$a;
// echo "Sebelum berubah nilai\n";
// echo "a = $a\n"; // a = 1
// echo "b = $b\n"; // b = 1
// // Jika kedua variabel dihapus maka nilai 1 hilang dari memory
// unset($a);
// unset($b);
// echo "Setelah berubah nilai\n";
// echo "a = $a\n"; // a =  , variabel a sudah tidak dikenal
// echo "b = $b\n"; // b =  , variabel b sudah tidak dikenal


// Parsing Parameter by Value
// Secara default, apabila mengubah nilai parameter di dalam function, maka niali argument di luar function tidak ikut berubah. Contoh:
// function update(int $n) { // (int $n)
//   $n = 2;
// }
// $number = 1;
// update($number);
// echo "$number\n"; // 1


// Parsing Parameter by Reference
// Apabila menggunakan reference pada parameter, maka perubahan nilai parameter di dalam function ikut merubah nilai variabel di luar function. Contoh:
// function update(int &$n) { // (int &$n)
//   $n = 2;
// }
// $number = 1;
// update($number);
// echo "$number\n"; // 2


// Returning Reference
// Function pada PHP bisa mengembalikan reference terhadap variabel di dalam function. Walaupun bisa, namun fitur ini tidak disarankan untuk digunakan kerena membingungkan. Mengubah nilai di luar function untuk mengubah nilai di dalam function. Contoh:
function &hello() { // Aturan menggunakan Rerurning Reference; 2. Harus ada simbol Reference (&) pada pembuatan/deklarasi function dan saat memanggil function yang pertama
  static $name = 'Budi'; // Aturan menggunakan Rerurning Reference; 1. Varuabel tang berada dalam function harus static.
  echo "$name\n";
  return $name;
}
$myName = &hello(); // Budi // memanggil function yang pertama // hal ini terjadi karena global variabel myName adalah reference ke static variabel name, jadi kalau kita merubah nilai dari variabel myName maka nilai dari static variabel myName ikut berubah
$myName = 'Andi'; // variabel myName dirubah
hello(); // Andi
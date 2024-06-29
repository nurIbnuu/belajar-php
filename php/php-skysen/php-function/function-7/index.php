<?php
// Variable Function
// Menyimpan nama function dalam bentuk string ke dalam variable. Apabila kita menambahkan tanda kurung setelah nama variable tersebut, maka PHP akan mencari dan menjalankan function yang namanya sesuai dengan isi variable. Konsep ini juga bisa digunakan untuk mengirimkan function sebagai argument. Contoh :
// function hello() {
//   echo "Hello World\n";
// }
// $functionName = 'hello';
// $functionName(); // Hello World


// Latihan Tahun Kabisat (Refactoring dengan Variable Function, cara copy paste code di dalam function testLeapYear kurang efektif yang perbedaanya hanya ada pada nama function yang digunakan)
// Umum ke Khusus, pakai nested if, sulit dibaca
function isLeapYear1(int $year) : bool {
  // Write your code here
  if($year % 4 == 0)
    if($year % 100 == 0)
      if($year % 400 == 0)
        return true;
      else
        return false;
    else
      return true;
  else
    return false;
}

// Khusus ke Umum, pakai elseif (refactoring)
function isLeapYear2(int $year) : bool {
  // Write your code here
  if($year % 400 == 0)
    return true;
  elseif($year % 100 == 0)
    return false;
  elseif($year % 4 == 0)
    return true;
  else
    return false;
} 

// Pakai Match Expession, mirip elseif (refactoring lagi)
function isLeapYear3(int $year) : bool {
  // Write your code here
  return match(true) {
    $year % 400 == 0 => true,
    $year % 100 == 0 => false,
    $year % 4 == 0 => true,
    default => false,
  };
}

function executeLeapYear(int $year, string $functionName) {
  $result = $functionName($year);
  if($result)
    echo "$functionName() : Tahun $year adalah Tahun Kabisat\n";
  else
    echo "$functionName() : Tahun $year bukan Tahun Kabisat\n";
}

function testLeapYear(int $year) {
  executeLeapYear($year, 'isLeapYear1');
  executeLeapYear($year, 'isLeapYear2');
  executeLeapYear($year, 'isLeapYear3');
}

// Memanggil function
testLeapYear(1);
testLeapYear(4);
testLeapYear(1900);
testLeapYear(2000);
testLeapYear(2023);
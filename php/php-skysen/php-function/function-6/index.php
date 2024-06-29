<?php
// Latihan Tahun Kabisat

// Umum ke Khusus, pakai nested if, sulit dibaca
function isLeapYear(int $year) : bool {
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


function testLeapYear(int $year) {
  $result = isLeapYear($year);
  if($result)
    echo "Tahun $year adalah Tahun Kabisat\n";
  else
    echo "Tahun $year bukan Tahun Kabisat\n";

  $result = isLeapYear2($year);
  if($result)
    echo "Tahun $year adalah Tahun Kabisat\n";
  else
    echo "Tahun $year bukan Tahun Kabisat\n";

  $result = isLeapYear3($year);
  if($result)
    echo "Tahun $year adalah Tahun Kabisat\n";
  else
    echo "Tahun $year bukan Tahun Kabisat\n";
}

// Memanggil function
testLeapYear(1);
testLeapYear(4);
testLeapYear(1900);
testLeapYear(2000);
testLeapYear(2023);
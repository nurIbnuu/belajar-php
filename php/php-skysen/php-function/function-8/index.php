<?php
// Recursive
// Function yang memanggil dirinya sendiri, sehingga terjadi pengulangan

// Kelebihan Recursive
// 1. Kode menjadi lebih sederhana
// 2. Cocok untuk kasus seperti Faktorial, Fibbonaci, dan Backtracking

// Kekurangan Recursive
// 1. Program lebih lambat dibandingkan dengan looping biasa
// 2. Memerlukan memory lebih banyak
// 3. Recursive yang terlalu dalam dapat menyebabkan kehabisan memory atau stack overflow
// sebisa mungkin hindari penggunaa Recursive

/* 
function helloWorldLoop(int $n) {
  for($i = $n; $i > 0; $i--)
    echo "Hello World $i\n";
}
helloWorldLoop(3);

function helloWorldRecursive(int $n) {
  if($n <= 0) // Base Case
    return;
  echo "Hello World $n\n";
  helloWorldRecursive($n - 1);
}
helloWorldRecursive(3);
 */

// Faktorial
function faktorialRecursive(int $n) {
  if($n == 0)
    return 1;
  return $n * faktorialRecursive($n - 1);
}
echo faktorialRecursive(5) . PHP_EOL;

function faktorialLoop(int $n) {
  $result = 1;
  for($i = $n; $i > 0; $i--)
    $result *= $i;
  return $result;
}
echo faktorialLoop(5) . PHP_EOL;
<?php
// Fibonacci
// Pola bilangan hasil penjumlahan dua bilangan sebelumnya.
// 0, 1, 1 => F(1) + F(2) = F(3)
// Latihan; 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, ...
echo "Fibonacci Recursive\n";
function fibonacciRecursive(int $n): int {
  if($n <= 1) // <= agar tidak eror jika ada yang memanggil function dengan nilai 0/negatif, function(0)
    return 0;
  if($n == 2)
    return 1;
  return fibonacciRecursive($n - 1) + fibonacciRecursive($n - 2);
}

for($i = 1; $i <= 10; $i++) {
  echo fibonacciRecursive($i) . ', ';
}
echo PHP_EOL;



echo "Fibonacci Loop\n";
function fibonacciLoop(int $n): int {
  $n1 = 0;
  $n2 = 1;
  if($n <= 1)
    return $n1;
  if($n == 2)
    return $n2;
  for($i = 3; $i <= $n; $i++) {
    $result = $n1 + $n2;
    $n1 = $n2;
    $n2 = $result;
  }
  return $result;
}

for($i = 1; $i <= 10; $i++) {
  echo fibonacciLoop($i) . ', ';
}
echo PHP_EOL;
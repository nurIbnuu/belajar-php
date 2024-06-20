<?php
// Parameter

// 1. "Parameter" terletak di dalam kurung 'pembuatan' function, (string $firstName, string $lastName)
function greet(string $firstName, string $lastName) {
  echo "Hello $firstName $lastName \n";
}
function total(int|float $a, int|float $b) {
  echo $a + $b . PHP_EOL;
}

// 2. "Argument" terletak di dalam kurung 'pemanggilan' function, ('Nur')
// greet('Nur');

// 4. Saat merubah parameter di dalam blok function maka yang berubah hanya nilai dari parameter saja, nilai dari variable pemanggil function tidak ikut berubah atau disebut 'passing parameter by value'
// $lastName = 'Ibnu';
// greet($lastName);
// echo $lastName;

// 3. greet(); jika telah menetapkan "parameter" tapi tidak mengisinya dengan "argument" maka akan error

// 5. lebih dari 1 parameter
// function greet($firstName, $lastName)
// greet('Nur', 'Ibnu'); Nur Ibnu

// 6. Default argument values
// function greet($firstName, $lastName = 'Hubab')
// greet('Nur'); Nur Hubab
// default value tidak bisa di parameter pertama
// jika ada default argument maka parameter = optional, jika tidak ada maka parameter = required(harus diisi)

// 7. Named Argument (lastName : 'Ibnu', firstName : 'Nur')
// function greet($firstName, $lastName)
// greet(lastName : 'Ibnu', firstName : 'Nur'); Nur Ibnu

// 8. Typed Declaration (int, string, float)
// function total(int $a, int $b)
// total(1, '2'); 3
// function greet(string $firstName, string $lastName)
// greet(1, "ibnu"); 1 ibnu

// 9. Union Types (|)
// function total(int|float $a, int|float $b)
// total(1.4, 5); 5.4

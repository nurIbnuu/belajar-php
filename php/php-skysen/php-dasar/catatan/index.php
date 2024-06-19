<?php
  //          Selasa, 7 Mei 2024.
  //    echo, print, print_r(ini digunakan jika ada array) untuk mencetak ke layar jika dilihat oleh user, sedangkan var_dump digunakan untuk mencetak ke layar tapi untuk programmer karena yang dicetak lebih lengkap isinya.
  // echo "Hello World";

  //      VARIABEL DAN KONSTANTA.
  //    menyimpan nilai di memori dengan variabel dan konstanta.
  //    variabel diawali dengan tanda dollar $.
  // $myName = "nurIbnuu";
  // echo $myName;
  //    konstanta bisa dengan perintah define atau const.
  // define("MY_NAME", "nurIbnuuu");
  // echo MY_NAME;
  // const MY_NAME = "nurIbnuu";
  // echo MY_NAME;

  //      TIPE DATA.
  // $coba = null;
  // var_dump ($coba); ini null.
  //    jika kita belum tahu isi dari suatu variabel maka lebih baik isi dulu dengan tipe data null.
  // var_dump(false); ini boolean.
  // var_dump(PHP_INT_MAX); ini integer.
  // var_dump(2_000_000_000); ini integer.
  // var_dump(0b10); ini integer (biner).
  // var_dump(010); ini integer (oktal).
  // var_dump(0x10); ini integer (hexadesimal).
  // var_dump(-1.5); ini float.
  //    jika nilainya eksponen misal 123e5 maka dinilai float, meski ketika dicetak nilainya integer(12300000).
  // var_dump(123e5);
  // var_dump(-123e5); ini float.
  // var_dump(1_000_000_000.5); ini float.
  //    tipe data string lebih pakai petik 2 jika kita butuh menggunakan escape character dan variable passing, jika tidak maka pakai petik 1 saja agar script lebih cepat.
  // $myName = "nur\nIbnuu"; \n(menambah enter) merupakan escape character.
  // var_dump($myName);
  // $name1 = "nur";
  // $name2 = "$name1 Ibnuu"; ini variable passing.
  // var_dump($name2);
  //    string menggunakan heredoc(perilakunya sama dengan petik 2) dan nowdoc(perilakunya sama dengan petik 1) jika lebih dari banyak baris.
  // $html = <<<END     ini heredoc.
  // $html = <<<'END'   ini nowdoc
  // <!DOCTYPE html>
  // <html lang="en">
  // <head>
  //   <meta charset="UTF-8">
  //   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  //   <title>Document\n$name1</title>
  // </head>
  // <body>
  //   <h1></h1>
  // </body>
  // </html>
  // END;
  // var_dump($html);


  
  //        Rabu, 8 Mei 2024
  //      OPERATOR
  //    Operator Aritmatika (kali*), (sisa bagi/modulus%), (pangkat**)
  // var_dump((1+2)*3);
  //    Operator Penugasan (=, **=, &=, $a **= $b)
  // $a = 2;
  // $b = 3;
  // $a **= $b;
  // var_dump($a); 8
  //    Operator Penggabungan String (.), (.=)
  // $firstName = 'nur';
  // $lastName = 'Ibnuu';
  // $firstName .= $lastName;
  // var_dump($firstName);
  //    Operator Perbandingan hasilnya boolean (sama dengan==), (identik===), (tidak sama dengan<>), (tidak sama dengan!=), (tidak identik !==) (<, >, <=, >=)
  // $a = 1;
  // var_dump($a <> 1); bool(false)
  //    Operator Logika And(&& atau and), Or(|| atau or), Xor/eksklusif or(xor=benar jika kedua nilai berbeda), Not(!)
  // $a = 1;
  // $b = 2;
  // var_dump($b);
  //    Operator Increament & Decreament
  // $a = 1;
  // // $b = $a++; atau
  // $b = $a;
  // $a += 1;
  // $a = 1;
  // // $b = ++$a; atau
  // $a += 1;
  // $b = $a;
  // $a = null;
  // $a++; int(1)
  // $a = '1';
  // $a++; int(2)
  // $a = '4e1';
  // $a++; float(41)
  // $a = 'j';
  // $a++; string(1) "k"
  // var_dump($a);
  //    Operator Precedence, operator aritmatika * lebih tinggi dari +, operator logika And simbol (&&) lebih tinggi And kata kunci (and)

  //      Latihan Logika SWAP
  // $a = 1; int(1)
  // $b = 2; int(2)
  // // tulis kode untuk menukar nilai variable $a dan $b.
  // $containerValue = $a;
  // $a = $b;
  // $b = $containerValue;
  // var_dump($a); int(2)
  // var_dump($b); int(1)

  //      PHP di dalam HTML lebih direkomendasikan
  // $nama = 'nur';
  // <!-- <!DOCTYPE html>
  // <html lang="en">
  // <head>
  //   <meta charset="UTF-8">
  //   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  //   <title>Document</title>
  // </head>
  // <body>
  //   <h1>Halo, <?php echo $nama; ini seharusnya ada tutup php</h1>
  // </body>
  // </html>



  //          Thursday, 9th May 2024
  //    Percabangan dengan if
  //  Membuat baris baru dengan '\n' atau PHP_EOL. Semua kode dalam kurung kurawal akan dianggap 1 statement sehingga akan dieksekusi semua. Tetap gunakan kurung kurawal meski hanya 1 baris kode.
  // $condition = false;
  // echo 'Sebelum Percabangan' . PHP_EOL;
  // if ($condition) {
  //   echo 'BENAR' . PHP_EOL;
  // } else {
  //   echo 'SALAH' . PHP_EOL;
  // }
  // echo 'Setelah Percabangan' . PHP_EOL;
  // $condition = false;
  //    SYNTAX LAIN UNTUK IF/BEBAS PILIH KURUNG KURAWAL ATAU YANG TITIK DUA
  // $condition = true;
  // echo 'Sebelum Percabangan' . PHP_EOL;
  // if ($condition):
  //   echo 'BENAR' . PHP_EOL;
  // else:
  //   echo 'SALAH' . PHP_EOL;
  // endif;
  // echo 'Setelah Percabangan' . PHP_EOL;
  //    LATIHAN, cetak 'Benar' jika nilai $score lebih kecil sama dengan 3 atau lebih besar sama dengan 8.
  // $score = 8;
  // if (($score <= 3) || ($score >= 8)) {
  //   echo 'Benar' . PHP_EOL;
  // } else {
  //   echo 'Salah' . PHP_EOL;
  // }
  //    LATIHAN, nilai A 'Sangat Baik', nilai B 'Baik', nilai C 'Cukup', nilai D 'Kurang', nilai E 'Gagal'.
  // $grade = 'F';
  // if ($grade === 'A') {
  //   echo 'Sangat Baik' . PHP_EOL;
  // } elseif ($grade === 'B') {
  //   echo 'Baik' . PHP_EOL;
  // } elseif ($grade === 'C') {
  //   echo 'Cukup' . PHP_EOL;
  // } elseif ($grade === 'D') {
  //   echo 'Kurang' . PHP_EOL;
  // } elseif ($grade === 'E') {
  //   echo 'Gagal' . PHP_EOL;
  // } else {
  //   echo 'Salah Input' . PHP_EOL;
  // }
  //      JIKA KASUSNYA SEPERTI DI ATAS LEBIH BAIK PAKAI SWITCH CASE
  // $grade = 'F';
  // switch ($grade) {
  //   case 'A':
  //     echo 'Sangat Baik';
  //     break;
  //   case 'B':
  //     echo 'Baik';
  //     break;
  //   case 'C':
  //     echo 'Cukup';
  //     break;
  //   case 'D':
  //     echo 'Kurang';
  //     break;
  //   case 'E':
  //     echo 'Gagal';
  //     break;
  //   default:
  //     echo 'Salah Input';
  //     break;
  // }
  // //      SYNTAX ALTERNATIF SWITCH CASE
  // switch ($grade):
  //   case 'A':
  //     echo 'Sangat Baik';
  //     break;
  //   case 'B':
  //     echo 'Baik';
  //     break;
  //   case 'C':
  //     echo 'Cukup';
  //     break;
  //   case 'D':
  //     echo 'Kurang';
  //     break;
  //   case 'E':
  //     echo 'Gagal';
  //     break;
  //   default:
  //     echo 'Salah Input';
  //     break;
  // endswitch;
  //      LATIHAN, cetak 'Ganjil' atau 'Genap'
  // $number = 1;
  // if ($number % 2 === 0) {
  //   echo "$number adalah bilangan Genap" . PHP_EOL;
  // } else {
  //   echo "$number adalah bilangan Ganjil" . PHP_EOL;
  // }
  //     ATAU PAKAI OPERATOR TERNARY
  // echo ($number % 2 === 0) ? "$number = Genap" . PHP_EOL : "$number = Ganjil" . PHP_EOL;
  //      PERULANGAN
  //    While
  // $i = 0;
  // while ($i < 3) {
  //   echo 'Hello World' . PHP_EOL;
  //   $i++;
  // }
  //    SYNTAX ALTERNATIF
  // $i = 0;
  // while ($i < 3):
  //   echo 'Hello World' . PHP_EOL;
  //   $i++;
  // endwhile;
  //    Do While, kode akan dijalankan minimal 1 kali.
  // $i = 9;
  // do {
  //   echo 'Hello World' . PHP_EOL;
  //   $i++;
  // } while ($i < 3);
  //    For
  // for ($i = 0; $i < 3; $i++) {
  //   echo 'Hello World' . PHP_EOL;
  // }
  //    SYNTAX ALTERNATIF
  // for ($i = 0; $i < 3; $i++):
  //   echo 'Hello World' . PHP_EOL;
  // endfor;
  //      LATIHAN PERULANGAN BERSARANG, supaya kode rapi pakai printf('%02d ', $velue++)
  //    LATIHAN 1
  // 01 
  // 02 03
  // 04 05 06
  // 07 08 09 10
  // 11 12 13 14 15
  // const SIZE = 5;
  // $value = 1;
  // for ($i = 0; $i < SIZE; $i++) {
  //   for ($j = 0; $j <= $i; $j++) {
  //     printf('%02d ', $value++);
  //   }
  //   echo PHP_EOL;
  // }
  //    LATIHAN 2
  // 1 2 3 4 5 
  // 2 3 4 5
  // 3 4 5
  // 4 5
  // 5
  // const SIZE = 5;
  // for ($i = 0; $i < SIZE; $i++) {
  //   for ($j = 0; $j < SIZE - $i; $j++) {
  //     printf('%d ', $i + $j + 1);
  //   }
  //   echo PHP_EOL;
  // }
  //     LATIHAN 3
  // 01 
  // 02 06 
  // 03 07 10 
  // 04 08 11 13 
  // 05 09 12 14 15 
  // const SIZE = 5;
  // for ($i = 0; $i < SIZE; $i++) {
  //   $value = $i + 1;
  //   printf ('%02d ', $value);

  //   for ($j = 0; $j < $i; $j++) {
  //     $value += SIZE - $j - 1;
  //     printf('%02d ', $value);
  //   }
  //   echo PHP_EOL;
  // }

  //  **********
  //   *********
  //    ********
  //     *******
  //      ******
  //       *****
  //        ****
  //         ***
  //          **
  //           *
  //   define ('SIZE', 10);
  //   for ($i = 1; $i <= SIZE ;$i++) {
  //     for ($space = 1; $space <= ($i - 1); $space++) {
  //       echo ' ';
  //     }
  //     for ($star = 1; $star <= (SIZE - $i) + 1; $star++) {
  //       echo '*';
  //     }
  //     echo PHP_EOL;
  //   }
  
  // *******************
  //  *****************
  //   ***************
  //    *************
  //     ***********
  //      *********
  //       *******
  //        *****
  //         ***
  //          *
  // const SIZE = 10;
  // for($i = 1; $i <= SIZE; $i++) {
  //   for ($space = 1; $space <= ($i - 1); $space++) {
  //     echo ' ';
  //   }
  //   for ($star = 1; $star <= ((2 * SIZE) - (2 * $i) + 1); $star++) {
  //     echo '*';
  //   }
  //   echo PHP_EOL;
  // }

  // *******************
  //   *****************
  //     ***************
  //       *************
  //         ***********
  //           *********
  //             *******
  //               *****
  //                 ***
  //                   *
  //     const SIZE = 10;
  //     for($i = 1; $i <= SIZE; $i++) {
  //       for ($space = 1; $space <= ($i - 1) * 2; $space++) {
  //         echo ' ';
  //       }
  //       for ($star = 1; $star <= ((2 * SIZE) - (2 * $i) + 1); $star++) {
  //         echo '*';
  //       }
  //       echo PHP_EOL;
  //     }

  // o 
  // o o
  // o   o
  // o     o
  // o       o
  // o         o
  // o           o
  // o             o
  // o               o
  // o o o o o o o o o o
  // const SIZE = 10;
  // for ($i = 1; $i <= SIZE; $i++) {
  //   for ($j = 1; $j <= $i; $j++) {
  //     if ($j === 1 || $i === SIZE || $i === $j) {
  //       echo 'o ';
  //     } else {
  //       echo "  ";
  //     }
  //   }
  //   echo PHP_EOL;
  // }



  
  //        Rabu, 15 Mei 2024
  //    Catatan Seputar HTML dan PHP
  // DOCTYPE harus ditulis besar semua agar tidak error ketika dibuka di XHTML
  // Perbedaan konstanta pada PHP: define() tidak bisa dipakai di OOP, const bisa disimpan dalam Class ketika OOP
  // Elemen HTML= tag pembuka, isi(bisa berupa tag lagi(misal tag html yang isinya tag head - di dalam head masih ada tag title dll, tag body - di dalam tag body masih ada tag h1 dll), atau bahkan hanya text saja(misal tag h1 yang isinya hanya teks saja))
  


  //        Minggu, 19 Mei 2024
  //    OPERATOR BITWISE
  //  OPERATOR AND (&)
  // $a = 0b00000011;
  // $b = 0b00000100;
  // $c = $a & $b;
  // echo $a .PHP_EOL;
  // echo $b . PHP_EOL;
  // echo "-------- &\n";
  // echo $c . PHP_EOL;
  // printf("%08b\n", $a);
  // printf("%08b\n", $b);
  // printf("-------- &\n");
  // printf("%08b\n", $c);
  //  OPERATOR OR (|)
  // $a = 0b00000011;
  // $b = 0b00000100;
  // $c = $a | $b;
  // echo $a .PHP_EOL;
  // echo $b . PHP_EOL;
  // echo "-------- |\n";
  // echo $c . PHP_EOL;
  // printf("%08b\n", $a);
  // printf("%08b\n", $b);
  // printf("-------- |\n");
  // printf("%08b\n", $c);
  //  OPERATOR XOR (^)
  // $a = 0b00000011;
  // $b = 0b00000100;
  // $c = $a ^ $b;
  // echo $a .PHP_EOL;
  // echo $b . PHP_EOL;
  // echo "-------- ^\n";
  // echo $c . PHP_EOL;
  // printf("%08b\n", $a);
  // printf("%08b\n", $b);
  // printf("-------- ^\n");
  // printf("%08b\n", $c);
  // //  OPERATOR NOT (~)
  // $a = 0b00000011;
  // $c = ~$a;
  // echo $a .PHP_EOL;
  // echo $c . PHP_EOL;
  // printf("%064b\n", $a);
  // printf("%064b\n", $c);
  //  OPERATOR SHIFT LEFT (<<)
  // $a = 0b00000011;
  // $c = $a << 1;
  // echo $a .PHP_EOL;
  // echo $c . PHP_EOL;
  // printf("%064b\n", $a);
  // printf("%064b\n", $c);
  //  OPERATOR SHIFT RIGHT (>>)
  // $a = 0b00000011;
  // $c = $a >> 1;
  // echo $a .PHP_EOL;
  // echo $c . PHP_EOL;
  // printf("%064b\n", $a);
  // printf("%064b\n", $c);
  
  //    NULL COALESCING OPERATOR
  //  Untuk memeriksa apakah sebuah variabel pernah diset autau berninai null
  // $name = 'null';
  // // unset($name);
  // if (isset($name)) {
  //   echo $name . PHP_EOL;
  // } else {
  //   echo 'Belum ada variabel name' . PHP_EOL;
  // }
  // NULL COALESCING OPERATOR
  // echo $name ?? 'Belum ada variable name';
  // echo PHP_EOL;
  
  //    MATCH
  // $grade = 'A';
  // switch($grade){
  //   case 'A' : 
  //     echo "Excellent\n";
  //     break;
  //   case 'B' : 
  //     echo "Good\n";
  //     break;
  //   case 'C' : 
  //     echo "Satisfactory\n";
  //     break;
  //   case 'D' : 
  //     echo "Minimum Passing\n";
  //     break;
  //   case 'E' :
  //     echo "Failure\n";
  //     break;
  //   default:
  //     echo "Error\n";
  //     break;
  // }
  // echo match($grade){
  //   'A' => "Excellent\n",
  //   'B' => "Good\n",
  //   'C' => "Satisfactory\n",
  //   'D' => "Minimum Passing\n",
  //   'E' => "Failure\n",
  //   default => "Error\n",
  // };
  // $grade = 100;
  // echo match(true){
  //   $grade > 100 => "Error\n",
  //   $grade >= 90 => "A\n",
  //   $grade >= 80 => "B\n",
  //   $grade >= 70 => "C\n",
  //   $grade >= 60 => "D\n",
  //   $grade >= 0 => "E\n",
  //   default => "Error\n",
  // };
<?php
//          Pertemuan 2 - PHP Dasar
//      Syntax di PHP

// Ini komentar 1 baris

/* 
ini komentar
lebih dari baris
*/

//    Standar Output
// echo, print
// print_r
// var_dump
// echo true;
// echo false; // hasilnya tidak ditampilkan di browser
// echo "Muhammad ";
// print "Nur ";
// print_r ("Ibnu ");
// var_dump ("Hubab");
// echo 123; 

//    Penulisan syntax PHP
// 1. PHP di dalam HTML (ini yang disarankan)
      /*
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
      </head>
      <body>
        <h1>Selamat Datang, <?php echo 'nurIbnuu'?></h1>
        <p>Ini adalah <?php echo 'Paragraf'?></p>
      </body>
      </html>
      */
// 2. HTML di dalam PHP
      /*
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
      </head>
      <body>
        <?php 
          echo "<h1>Selamat Datang</h1>"
        ?>
      </body>
      </html>
      */

//    Variabel
// $nama = 'nurIbnuu';
// echo "Nama = $nama";
// echo 'Nama = $nama';

//     Operator
//   Aritmatika; + - * / %
// $x = 1;
// $y = 2;
// echo $x + $y;
//   Penggabung String; .
// $namaDepan = 'Nur';
// $namaBelakang = 'Ibnu';
// echo $namaDepan . ' ' . $namaBelakang;
//   Assignment; = += -= *= /= %= .=
// $nama = 'Nur';
// $nama .= ' ';
// $nama .= 'Ibnu';
// echo $nama;
//   Perbangingan; < > <= >= == != === !==
// var_dump(1 === '1');
//   Logika; && || ! and or xor
// $x = 10;
// var_dump(!($x >= 10 and $x**2 == 100))
?>.
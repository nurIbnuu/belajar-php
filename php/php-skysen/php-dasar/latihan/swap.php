<?php
$namaDepan = 'Ibnu';
$namaBelakang = 'Nur';

// Penyelesaian
$temporary = $namaDepan;
$namaDepan = $namaBelakang;
$namaBelakang = $temporary;

echo $namaDepan . ' ' . $namaBelakang;

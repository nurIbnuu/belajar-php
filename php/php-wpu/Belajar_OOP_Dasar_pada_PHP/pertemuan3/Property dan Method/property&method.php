<?php 
// OOP DASAR pada PHP #3 - Property dan Method

// Property
# Merepresentasikan data/keadaan dari sebuah object
# Variable yang ada di dalam object(member variable)
# Sama seperti variable di dalam PHP, ditambah dengan visibility di depannya

// Method
# Merepresentasikan perilaku dari sebuah object
# Function yang ada di dalam object
# Sama seperti function di dalam PHP, ditambah dengan visibility di depannya


// Misal class Mobil
  // Property; identitas mobil ini/data
  # nama
  # merk
  # warna
  # kecepatanMaksimal
  # jumlahPenumpang
  // Method; apa yang bisa dilakukan mobil ini/perilaku
  # tambahKecepatan
  # kurangiKecepatan
  # gantiTransmisi
  # belokKiri
  # belokKanan

class Mobil {
  // property
  public $nama;
  public $merk;
  public $warna;
  public $kecepatanMaksimal;
  public $jumlahPenumpang;

  // method
  public function tambahKecepatan() {

  }
  public function kurangiKecepatan() {

  }
  public function gantiTransmisi() {

  }
}
?>
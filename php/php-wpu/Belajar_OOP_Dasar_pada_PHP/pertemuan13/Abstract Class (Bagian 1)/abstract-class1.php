<?php 
// OOP DASAR pada PHP #13 - Abstract Class (bagian 1)

  // ABSTRACT CLASS (1)
    # Sebuah kelas yang tidak dapat di-instansiasi; tidak bisa membuat object dari kelas abstrak; yang di-instansiasi adalah kelas turunannya; kelas sesungguhnya adalah kelas turunannya::Menginstansiasi kelas Buah dari kodingannya pasti error dan dari konsep juga aneh rasanya belum jelas.
    # Kelas 'abstrak'.
    # Mendefinisikan interface untuk kelas lain yang menjadi turunannya:: interface(di kelas abstrak) berperan sebagai kerangka dasar(di kelas turunan).
    # Berperan sebagai 'kerangka dasar' untuk kelas turunannya; kelas turunan bekerja sesuai 'kerangka dasar' yang telah dibuat di kelas abstrak.
    # Memiliki minimal 1 method abstrak; method ini sebagai kerangka dasar dari method yang akan kita buat di kelas-kelas turunannya.
    # Kelas abstrak erat kaitannya dengan inheritance/pewarisan.
    # Digunakan dalam 'pewarisan'/inheritance untuk 'memaksakan' implementasi method abstrak dgn nama yang sama untuk semua kelas turunannya; method dalam kelas abstrak hanya interface/tidak ada isinya, isinya dituliskan di kelas turunanya dengan nama method yang sama::Misal kelas baru yaitu Durian turunan dari kelas Buah maka wajib ada implementasi method makan() dari kelas Buah.

  // CONTOH KASUS
    class Buah {
      private $warna;

      public function makan() {
        // kunyah
        // nyam..nyam..nyam..
      } // isi dari method ini memberi tahu bagaiman cara memakan buah

      public function setWarna($warna) {
        $this->warna = $warna;
      }
    }

    class Apel extends Buah { // mewarisi semua property dan method dari kelas Buah
      public function makan() {
        // kunyah
        // sampai bagian tengah
      }
    }

    class Jeruk extends Buah {
      public function makan() {
        // kupas
        // kunyah
      }
    }

    $apel = new Apel();
    $apel->makan(); # => rasa Apel

    $buah = new Buah(); // Buah bukan kelas yang akan di-instansiasi; Buah kelas adalah kelas abstraknya sehingga tidak bisa di-instansiasi
    $buah->makan(); # => rasa buah apa? kurang jelas


  // MEMBUAT KELAS ABSTRAK
  abstract class Buah1 { // kelas abstrak
    private $warna;

    abstract public function makan(); // method abstrak; hanya interface saja; implementasinya ada di kelas turunannya.

    public function setWarna($warna) {
      $this->warna = $warna;
    }
  }

  // Abstract Class (2)
    # Semua kelas turunan, harus mengimplementasikan method abstrak yang ada di kelas abstraknya
    # Kelas abstrak boleh memiliki property reguler/method reguler;tanpa static
    # Kelas abstrak boleh memiliki static property/static method


  // Contoh Kelas Abstrak
    # class Mobil extends Kendaraan
    # class Laptop extends Komputer
    # class Email extends Komunikasi
      # Kendaraan, Komputer, Komunikasi adalah kelas Abstrak


  // Alasan kenapa pakai kelas abstrak
    # Merepresentasika ide atau konsep dasar; penggunaan kelas abstrak adalah keputusan design
    # 'Composition over Inheritance' => sebaiknya melakukan komposisi daripada melakukan inheritance begitu saja; Composition menggunakan abstraksi/interface
    # Dengan melakukan Composition maka menjadi salah satu cara menerapkan Polimorphism
    # Sentralisasi Logic
    # Mempermudah pengerjaan tim; membuat base class/kelas utama dengan membuat beberapa method abstract sehingga rekan kerja akan membuat subclass/kelas turunannya mereka tahu bahwa dalam kelas turunannya wajib ada sebuah method sebagai implementasi dari method abstraknya
?>
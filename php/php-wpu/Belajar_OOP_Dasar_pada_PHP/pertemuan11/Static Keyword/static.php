<?php 
// OOP DASAR pada PHP #11 - Static Keyword

  // class merupakan template dari object
  // membuat object == menginstansiasi; maka bisa menggunakan property dan method dalam class

  // kita bisa mengakses property dan method dalam konteks class/kita bisa mengakses property dan method tanpa melakukan instansiasi dari kelas tersebut menggunakan 'static keyword', dengan membuat static property dan static method supaya bisa akses pada konteks class

class ContohStatic {
  public static $angka = 1;

  public static function halo() {
    return 'Halo. ' . self::$angka++ . ' kali.';
  }
}

// cara mengakses property yang punya keyword static
echo ContohStatic::$angka;
echo '<br>';
// cara mengakses method yang punya keyword static
echo ContohStatic::halo();
echo '<hr>';

  // $this->angka; mengakses angka menggunakan $this hanya berlaku untuk object yang sudah diinstansiasi, maka gunakan self::
  echo ContohStatic::halo();
  echo '<hr>';

/* DI ATAS ADALAH CARA MENGGUNAKAN PROPERTY DAN METHOD YANG MENGGUNAKAN KEYWORD STATIC */


// static => self::
// no static => $this









// untuk apa static keyword?
  # Member(property & method) yang terikat dengan class, bukan dengan object; mengakses property dan method dalam konteks class maka pakai static
  # Nilai static akan selalu tetap meskipun object diinstansiasi berulang kali
    class Contoh {
      public static $angka = 1;

      public function halo() {
        return 'Halo ' . self::$angka++ . ' kali. <br>';
      }
    } // ini OOP BIASA/pakai instansiasi/membuat object

    // untuk mencetak isi method halo() maka harus instansiasi dulu
    $obj = new Contoh; // bisa tanpa parameter/tanda kurung saat menginstansiasi; new Contoh atau new Contoh()
    echo $obj->halo();
    echo $obj->halo();
    echo $obj->halo();

    echo '<hr>';

    $obj2 = new Contoh;
    echo $obj2->halo();
    echo $obj2->halo();
    echo $obj2->halo();

    /* 
    nilai angka akan tetap ketika ada keyword static meskipun menginstansiasi object baru yaitu $obj2
    Halo 1 kali.
    Halo 2 kali.
    Halo 3 kali.

    Halo 4 kali.
    Halo 5 kali.
    Halo 6 kali.
    */

  # Membuat kode menjadi 'procedural', karena kita bisa memanggil property dan method lewat kelasnya tanpa intansiasi; tidak membuat OOP(object)
  # Biasanya digunakan untuk membuat fungsi bantuan/helper
  # Biasa digunakan di class-class utility pada Framework


?>
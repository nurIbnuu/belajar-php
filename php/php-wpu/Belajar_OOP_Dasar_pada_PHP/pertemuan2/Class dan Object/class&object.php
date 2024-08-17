<?php
// OOP DASAR pada PHP #2 - Class dan Object

// Class ibarat denah/blueprint/template sebuah rumah; template untuk membuat sebuah objek
// Object ibarat rumah; implementasi atau instansiasi dari rancangan kelas
// Object yang banyak ibarat komplek perumahan

// Class
# Blueprint/template untuk membuat instance dari object
# Class mendefinisikan object
# Menyimpan data/property dan perilaku/method

// Membuat Class
# Diawali dengan menuliskan keyword 'class', diikuti nama class dan dibatasi dengan {} untuk menyimpan property dan method
# Aturan penamaan class sama seperti variable
# Format penulisannya PascalCase

/* 
class Coba {
  public $a; // property

  // method
  public function b() {

  }
}
 */





// Object
# Instance yang didefinisikan oleh Class
# Banyak object dapat dibuat menggunakan satu class
# Object dibuat dengan menggunakan keyword 'new'

class Coba {


}

// membuat object instance dari class
$a = new Coba(); // instance 1
$b = new Coba(); // instance 2
$c = new Coba(); // instance 3

var_dump($a); // object(Coba)[1]
var_dump($b); // object(Coba)[2]
var_dump($c); // object(Coba)[3]
?>
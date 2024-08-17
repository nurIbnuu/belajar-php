<?php 

abstract class Produk { // kelas abstrak
  protected $judul,
          $penulis,
          $penerbit,
          $harga,
          $diskon;


  public function __construct($judul = 'Judul', $penulis ='Penulis', $penerbit = 'Penerbit', $harga = 0) {
      $this->judul = $judul;
      $this->penulis = $penulis;
      $this->penerbit = $penerbit;
      $this->harga = $harga;
    }

  // Setter & Getter Penulis
  public function setJudul($judul) {
    // Validasi
    if(!is_string($judul)) {
      throw new Exception('Judul Harus String'); # menampilkan Error 'Judul Harus String'
    }
    $this->judul = $judul;
  }
  public function getJudul() { # Getter
    return $this->judul;
  }
  
  // Setter & Getter Penulis
  public function setPenulis($penulis) {
    $this->penulis = $penulis;
  }
  public function getPenulis() {
    return $this->penulis;
  }
  
  // Setter & Getter Penerbit
  public function setPenerbit($penerbit) {
    $this->penerbit = $penerbit;
  }
  public function getPenerbit() {
    return $this->penerbit;
  }

  
  // Agar diskon lebih fleksibel untuk barang apapun maka method setDiskon disimpan di class Produk, sehingga property diskon visibilitynya jadi private
  public function setDiskon($diskon) { # set nilai (setter)
    $this->diskon = $diskon;
  }
  public function getDiskon() {
    return $this->diskon;
  }


  // Setter & Getter Harga
  public function setHarga($harga) {
    $this->harga = $harga;
  }
  // getHarga menampilkan harga setelah didiskon
  public function getHarga() { # melihat nilai (getter)
    return $this->harga - ($this->harga * ($this->diskon / 100));
  } # property harga bisa diakses oleh kelas yang terdapat property harga/parent/kelas ini saja

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }


  // abstract public function getInfoProduk(); // method abstract, akan jadi interface

  abstract public function getInfo();

}
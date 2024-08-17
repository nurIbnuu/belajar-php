<?php 
class EbookSunnah {
  public $title,
         $category,
         $author,
         $publishedBy,
         $publishedYear;

  // CONSTRUCT
  public function __construct($title = 'Judul', $category = 'Kategori', $author = 'Penulis', $publishedBy = 'Diterbitkan oleh', $publishedYear = 0)
  {
    $this->title = $title;
    $this->category = $category;
    $this->author = $author;
    $this->publishedBy = $publishedBy;
    $this->publishedYear = $publishedYear;
  }

  public function infoTerbit() {
    return "$this->publishedBy,
    $this->publishedYear";
  }
}




class InfoLengkapEbook {
  
  // OBJECT TYPE
  public function infoLengkap(EbookSunnah $ebook) {
    $info = "{$ebook->title} - {$ebook->category} - {$ebook->author} - {$ebook->publishedBy} - {$ebook->publishedYear}.";
    return $info;
  }
}







$ebook1 = new EbookSunnah('Arbain Nawawi', 'Aqidah', 'Imam Nawawi', 'Pustaka Syabbab', 2020);
echo "Info Terbit : {$ebook1->infoTerbit()}";
echo '<br>';
$infoEbook1 = new InfoLengkapEbook;
echo "Info Lengkap : {$infoEbook1->infoLengkap($ebook1)}";

echo '<br>';

$ebook2 = new EbookSunnah('Tafsir As Sady', 'Al Quran', 'Abdurrahman as Sady', 'Indonesia Bertauhid', 2024);
echo "Info Terbit : {$ebook2->infoTerbit()}";
echo '<br>';
$infoEbook2 = new InfoLengkapEbook;
echo "Info Lengkap : {$infoEbook2->infoLengkap($ebook2)}";


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Letter Logic</title>
  <style>
    body {
      margin-left: 30px;
    }
    h2 {
      margin: 0;
    }
  </style>
</head>
<body>
  <h1>Letter Logic</h1>
  <?php
  // Inisialisasi
  define('UKURAN', 5);
  $tampil = '*';
  $elseTampil = '&nbsp&nbsp';
  $enter = "<br>";
  ?>

  <h2>A</h2>
  <?php
  for ($baris = 1; $baris <= UKURAN; $baris++) {
    for ($kolom = 1; $kolom <= UKURAN; $kolom++) {
      if ((($kolom == 1 || $kolom == 5) && $baris >= 3) || $baris == 3 || ($baris == 2 && $kolom == 2) || ($baris == 2 && $kolom == 4) || ($baris == 1 && $kolom == 3)) {
        echo $tampil;
      } else {
        echo $elseTampil;
      }
    }
    echo $enter;
  }
  echo $enter;
  ?>

  <h2>B</h2>
  <?php
  for ($baris = 1; $baris <= UKURAN; $baris++) {
    for ($kolom = 1; $kolom <= UKURAN; $kolom++) {
      if ($kolom == 1 || (($baris == 1 || $baris == 3 || $baris == 5) && $kolom <= 4) || (($baris == 2 || $baris == 4) && $kolom == 5)) {
        echo $tampil;
      } else {
        echo $elseTampil;
      }
    }
    echo $enter;
  }
  echo $enter;
  ?>

  <h2>C</h2>
  <?php
  for ($baris = 1; $baris <= UKURAN; $baris++) {
    for ($kolom = 1; $kolom <= UKURAN; $kolom++) {
      if (($kolom == 1 && $baris >= 2 && $baris <= 4) || (($baris == 1 || $baris == 5) && ($kolom >= 2 && $kolom <= 5))) {
        echo $tampil;
      } else {
        echo $elseTampil;
      }
    }
    echo $enter;
  }
  echo $enter;
  ?>

  <h2>D</h2>
  <?php
  for ($baris = 1; $baris <= UKURAN; $baris++) {
    for ($kolom = 1; $kolom <= UKURAN; $kolom++) {
      if ((($baris == 1 || $baris == 5) && $kolom <= 4) || $kolom == 1 || ($kolom == 5 && $baris <= 4 && $baris >= 2)) {
        echo $tampil;
      } else {
        echo $elseTampil;
      }
    }
    echo $enter;
  }
  echo $enter;
  ?>

  <h2>E</h2>
  <?php
  for ($baris = 1; $baris <= UKURAN; $baris++) {
    for ($kolom = 1; $kolom <= UKURAN; $kolom++) {
      if ($kolom == 1 || ($baris & 1)) {
        echo $tampil;
      } else {
        echo $elseTampil;
      }
    }
    echo $enter;
  }
  echo $enter;
  ?>

  <h2>F</h2>
  <?php
  for ($baris = 1; $baris <= UKURAN; $baris++) {
    for ($kolom = 1; $kolom <= UKURAN; $kolom++) {
      if ($kolom == 1 || (($baris & 1) && $baris != 5)) {
        echo $tampil;
      } else {
        echo $elseTampil;
      }
    }
    echo $enter;
  }
  echo $enter;
  ?>

  <h2>G</h2>
  <?php
  for ($baris = 1; $baris <= UKURAN; $baris++) {
    for ($kolom = 1; $kolom <= UKURAN; $kolom++) {
      if (($kolom == 1 && $baris >= 2 && $baris <= 4) || (($baris == 1 || $baris == 5) && ($kolom >= 2 && $kolom <= 5)) || ($kolom == 5 && $baris >= 3) || ($baris == 3 && $kolom == 4)) {
        echo $tampil;
      } else {
        echo $elseTampil;
      }
    }
    echo $enter;
  }
  echo $enter;
  ?>

  <h2>H</h2>
  <?php
  for ($baris = 1; $baris <= UKURAN; $baris++) {
    for ($kolom = 1; $kolom <= UKURAN; $kolom++) {
      if ($kolom == 1 || $kolom == 5 || $baris == 3) {
        echo $tampil;
      } else {
        echo $elseTampil;
      }
    }
    echo $enter;
  }
  echo $enter;
  ?>

  <h2>I</h2>
  <?php
  for ($baris = 1; $baris <= UKURAN; $baris++) {
    for ($kolom = 1; $kolom <= UKURAN; $kolom++) {
      if ($kolom == 3) {
        echo $tampil;
      } else {
        echo $elseTampil;
      }
    }
    echo $enter;
  }
  echo $enter;
  ?>

  <h2>J</h2>
  <?php
  for ($baris = 1; $baris <= UKURAN; $baris++) {
    for ($kolom = 1; $kolom <= UKURAN; $kolom++) {
      if (($kolom == 5 && $baris <= 4) || ($baris == 5 && $kolom <= 4 && $kolom >= 2) || ($baris == 4 && $kolom == 1)) {
        echo $tampil;
      } else {
        echo $elseTampil;
      }
    }
    echo $enter;
  }
  echo $enter;
  ?>

  <h2>K</h2>
  <?php
  for ($baris = 1; $baris <= UKURAN; $baris++) {
    for ($kolom = 1; $kolom <= UKURAN; $kolom++) {
      if ($kolom == 1 || ($baris + $kolom == 6) || ($baris == $kolom && ($kolom + $baris >= 8))) {
        echo $tampil;
      } else {
        echo $elseTampil;
      }
    }
    echo $enter;
  }
  echo $enter;
  ?>

  <h2>L</h2>
  <?php
  for ($baris = 1; $baris <= UKURAN; $baris++) {
    for ($kolom = 1; $kolom <= UKURAN; $kolom++) {
      if ($kolom == 1 || $baris == 5) {
        echo $tampil;
      } else {
        echo $elseTampil;
      }
    }
    echo $enter;
  }
  echo $enter;
  ?>

  <h2>M</h2>
  <?php
  for ($baris = 1; $baris <= UKURAN; $baris++) {
    for ($kolom = 1; $kolom <= UKURAN; $kolom++) {
      if ($kolom == 1 || $kolom == 5 || ($baris == $kolom && $baris + $kolom <= 6) || ($baris == 2 && $kolom == 4)) {
        echo $tampil;
      } else {
        echo $elseTampil;
      }
    }
    echo $enter;
  }
  echo $enter;
  ?>

  <h2>N</h2>
  <?php
  for ($baris = 1; $baris <= UKURAN; $baris++) {
    for ($kolom = 1; $kolom <= UKURAN; $kolom++) {
      if ($kolom == 1 || $kolom == 5 || $baris == $kolom) {
        echo $tampil;
      } else {
        echo $elseTampil;
      }
    }
    echo $enter;
  }
  echo $enter;
  ?>

  <h2>O</h2>
  <?php
  for ($baris = 1; $baris <= UKURAN; $baris++) {
    for ($kolom = 1; $kolom <= UKURAN; $kolom++) {
      if (($kolom == 1 || $kolom == 5) && ($baris >= 2 && $baris <= 4) || ($baris == 1 || $baris == 5) && ($kolom >= 2 && $kolom <= 4)) {
        echo $tampil;
      } else {
        echo $elseTampil;
      }
    }
    echo $enter;
  }
  echo $enter;
  ?>

  <h2>P</h2>
  <?php
  for ($baris = 1; $baris <= UKURAN; $baris++) {
    for ($kolom = 1; $kolom <= UKURAN; $kolom++) {
      if ($kolom == 1 || ($baris <= 3 && $baris != 2 && $kolom <= 4) || ($baris == 2 && $kolom == 5)) {
        echo $tampil;
      } else {
        echo $elseTampil;
      }
    }
    echo $enter;
  }
  echo $enter;
  ?>

  <h2>Q</h2>
  <?php
  for ($baris = 1; $baris <= UKURAN; $baris++) {
    for ($kolom = 1; $kolom <= UKURAN; $kolom++) {
      if (($baris == 1 && $kolom >= 2 && $kolom <= 4) || ($kolom == 1 && $baris >= 2 && $baris <= 3) || ($kolom == 5 && $baris >= 2 && $baris <= 3) || ($baris == 4 && $kolom >= 2 && $kolom <= 4) || ($baris == 5 && $kolom == 5) || ($baris == 3 && $kolom == 3)) {
        echo $tampil;
      } else {
        echo $elseTampil;
      }
    }
    echo $enter;
  }
  echo $enter;
  ?>

  <h2>R</h2>
  <?php
  for ($baris = 1; $baris <= UKURAN; $baris++) {
    for ($kolom = 1; $kolom <= UKURAN; $kolom++) {
      if ($kolom == 1 || ($baris & 1 == 1 && $baris != 5 && $kolom <= 4) || ($baris == 2 && $kolom == 5) || ($baris == $kolom && $baris + $kolom != 4)){
        echo $tampil;
      } else {
        echo $elseTampil;
      }
    }
    echo $enter;
  }
  echo $enter;
  ?>

  <h2>S</h2>
  <?php
  for ($baris = 1; $baris <= UKURAN; $baris++) {
    for ($kolom = 1; $kolom <= UKURAN; $kolom++) {
      if (($baris & 1 == 1 && $kolom >= 2 && $kolom <= 4 || ($baris + $kolom == ($baris - 1) * 3)) || ($kolom == 5 && $baris <= 1) || ($kolom == 1 && $baris >= 5)){
        echo $tampil;
      } else {
        echo $elseTampil;
      }
    }
    echo $enter;
  }
  echo $enter;
  ?>

  <h2>T</h2>
  <?php
  for ($baris = 1; $baris <= UKURAN; $baris++) {
    for ($kolom = 1; $kolom <= UKURAN; $kolom++) {
      if ($baris == 1 || $kolom == 3){
        echo $tampil;
      } else {
        echo $elseTampil;
      }
    }
    echo $enter;
  }
  echo $enter;
  ?>

  <h2>U</h2>
  <?php
  for ($baris = 1; $baris <= UKURAN; $baris++) {
    for ($kolom = 1; $kolom <= UKURAN; $kolom++) {
      if (($kolom == 1 || $kolom == 5) && $baris <= 4 || ($baris == 5 && $kolom >= 2 && $kolom <= 4)){
        echo $tampil;
      } else {
        echo $elseTampil;
      }
    }
    echo $enter;
  }
  echo $enter;
  ?>

  <h2>V</h2>
  <?php
  for ($baris = 1; $baris <= UKURAN; $baris++) {
    for ($kolom = 1; $kolom <= UKURAN; $kolom++) {
      if (($kolom == 1 || $kolom == 5) && $baris <= 2 || ($baris - $kolom == 2) || $baris + $kolom == 8){
        echo $tampil;
      } else {
        echo $elseTampil;
      }
    }
    echo $enter;
  }
  echo $enter;
  ?>

  <h2>W</h2>
  <?php
  for ($baris = 1; $baris <= UKURAN; $baris++) {
    for ($kolom = 1; $kolom <= UKURAN; $kolom++) {
      if ((($kolom == 1 || $kolom == 3 || $kolom == 5) && $baris <= 4) || (($kolom == 2 || $kolom == 4) && $baris == 5)){
        echo $tampil;
      } else {
        echo $elseTampil;
      }
    }
    echo $enter;
  }
  echo $enter;
  ?>
</body>
</html>
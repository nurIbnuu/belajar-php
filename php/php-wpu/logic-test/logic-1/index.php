<?php 
  const XY = 9;
  $star = '*';
  $enter = '<br>';
  $space = '&nbsp&nbsp';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logic 1</title>
  <style>
    body {
      margin-left: 30px;
    }
    h1 {
      text-align: center;
    }
  </style>
</head>
<body>
  <h1>Tes Logika</h1>

  <h3>Intro</h3>
  <?php 
    for ($i = 1; $i <= XY; $i++) {
      for ($j = 1; $j <= XY; $j++) {
        echo $star;
        }
      echo $enter;
    }
  ?>

  <h2>Logic 1</h2>

  <h3>Soal 1</h3>
  <?php 
    for ($i = 1; $i <= XY; $i++) {
      for ($j = 1; $j <= XY; $j++) {
        if ($i == $j) {
          echo $star;
        } else {
          echo $space;
        }
      }
      echo $enter;
    }
  ?>

  <h3>Soal 2</h3>
  <?php 
    for ($i = 1; $i <= XY; $i++) {
      for ($j = 1; $j <= XY; $j++) {
        if ($i + $j == 10) {
          echo $star;
        } else {
          echo $space;
        }
      }
      echo $enter;
    }
  ?>

  <h3>Soal 3</h3>
  <?php 
    for ($i = 1; $i <= XY; $i++) {
      for ($j = 1; $j <= XY; $j++) {
        if ($i == $j || $i + $j == 10) {
          echo $star;
        } else {
          echo $space;
        }
      }
      echo $enter;
    }
  ?>

  <h3>Soal 4</h3>
  <?php 
    for ($i = 1; $i <= XY; $i++) {
      for ($j = 1; $j <= XY; $j++) {
        if ($i == $j || $i + $j == 10 || $i == 5 || $j == 5) {
          echo $star;
        } else {
          echo $space;
        }
      }
      echo $enter;
    }
  ?>

  <h3>Soal 5</h3>
  <?php 
    for ($i = 1; $i <= XY; $i++) {
      for ($j = 1; $j <= XY; $j++) {
        if ($j <= $i) {
          echo $star;
        } else {
          echo $space;
        }
      }
      echo $enter;
    }
  ?>

  <h3>Soal 6</h3>
  <?php 
    for ($i = 1; $i <= XY; $i++) {
      for ($j = 1; $j <= XY; $j++) {
        if ($j + $i >= 10) {
          echo $star;
        } else {
          echo $space;
        }
      }
      echo $enter;
    }
  ?>

  <h3>Soal 7</h3>
  <?php 
    for ($i = 1; $i <= XY; $i++) {
      for ($j = 1; $j <= XY; $j++) {
        if (($j + $i <= 10 && $j >= $i) || ($j + $i >= 10 && $j <= $i)) {
          echo $star;
        } else {
          echo $space;
        }
      }
      echo $enter;
    }
  ?>

  <h3>Soal 8</h3>
  <?php 
    for ($i = 1; $i <= XY; $i++) {
      for ($j = 1; $j <= XY; $j++) {
        if (($j + $i <= 10 && $j <= $i) || ($j + $i >= 10 && $j >= $i)) {
          echo $star;
        } else {
          echo $space;
        }
      }
      echo $enter;
    }
  ?>
</body>
</html>
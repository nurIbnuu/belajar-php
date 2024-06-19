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
  <title>Logic 2</title>
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

  <h2>Logic 2</h2>

  <h3>Soal 1</h3>
  <?php 
    for ($i = 1; $i <= XY; $i++) {
      for ($j = 1; $j <= XY; $j++) {
        if ($i == $j) {
          echo (($i * 2) - 1);
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
          echo (($j * 2) - 2);
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
        if ($i == $j) {
          echo (($i * 2) - 1);
        } elseif ($i + $j == 10) {
          echo (($j * 2) - 2);
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
        if ($i == $j) {
          echo (($i * 2) - 1);
        } elseif ($i + $j == 10) {
          echo (($j * 2) - 2);
        } elseif ($i == 5) {
          echo (($j * 2) - 2) . ' ';
        } elseif ($j == 5) {
          echo (($i * 2) - 1);
        } else {
          echo $space . $space;
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
          printf('%2d ', ((2 * $j) - 1));
        } else {
          echo $space . ' ';
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
          printf('%002d ', ((XY - $i) * 2));
        } else {
          echo $space . $space . ' ';
        }
      }
      echo $enter;
    }
  ?>

  <h3>Soal 7</h3>
  <?php 
    for ($i = 1; $i <= XY; $i++) {
      for ($j = 1; $j <= XY; $j++) {
        if ($i == $j) {
          echo ((2 * $j) - 1);
        } else if ($i + $j == 10) {
          echo ((2 * $j) - 2);
        } else if ($j + $i <= 10 && $j >= $i) {
          echo 'A';
        } else if ($j + $i >= 10 && $j <= $i) {
          echo 'B';
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
        if ($i == $j) {
          echo ((2 * $j) - 1);
        } else if ($i + $j == 10) {
          echo ((2 * $j) - 2);
        } else if ($j + $i <= 10 && $j <= $i) {
          echo 'A';
        } else if ($j + $i >= 10 && $j >= $i) {
          echo 'B';
        } else {
          echo $space;
        }
      }
      echo $enter;
    }
    echo $enter;
    echo $enter;
  ?>
</body>
</html>
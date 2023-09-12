<!DOCTYPE html>
<html>
<head>
</head>
<body>
  <?php
    // Fungsi untuk menghitung luas lingkaran
    function hitungLuasLingkaran($jariJari) {
      $luas = 2 * M_PI * pow($jariJari, 2);
      return $luas;
    }

    // Jari-jari lingkaran
    $jariJari = 5; // Ganti dengan jari-jari lingkaran yang diinginkan

    // Menghitung luas lingkaran
    $luasLingkaran = hitungLuasLingkaran($jariJari);

    echo "Jari-jari lingkaran adalah $jariJari.<br>";
    echo "Luas lingkaran adalah $luasLingkaran.";
  ?>
</body>
</html>

<!DOCTYPE html>
<head>
<title>Konstanta PHP</title>
</head>

<body>
<?php
define("PI", 3.14);
$r = 200;
$luas_lingkaran = PI * ($r * $r);
$keliling_lingkaran = 2 * PI * $r;
echo "Luas lingkaran : ".$luas_lingkaran;
echo "<br />";
echo "Keliling lingkaran : ".$keliling_lingkaran;
?>
</body>
</html>
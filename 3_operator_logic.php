<html>
<body>
<h1> PEMBAGIAN </h1>

<form method="post">

Nilai 1 = <input type="text" name="a" value="<?php echo $_POST["a"] ?>" required><br>
Nilai 2 = <input type="text" name="b" value="<?php echo $_POST["b"] ?>" required><br>

<br><input type="submit" value="hasil">
</form>
</body>
<?php
$a= $_POST["a"];
$b= $_POST["b"];
$penjumlahan = $a / $b;
echo "Hasil = $penjumlahan";
?>
</html>
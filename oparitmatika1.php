<!DOCTYPE html>
<html>
<head>
	<title>aritmatika</title>
</head>
<body>
<?php


//ambil isi form dan simpan ke variabel
$operand1 = $_REQUEST['operand1'];
$operand2 = $_REQUEST['operand2'];
$operator = $_REQUEST['operator'];

//rumus perhitungan
$perhitungan = $operand1.$operator.$operand2;

eval ("\$hasil = $perhitungan;");
echo "<h2> Menggunakan Operator </h2>";
echo "<br> Nilai Operand1 : $operand1 </br>";
echo "<br> Nilai Operand2 : $operand2 </br>";
echo "<br> hasil perhitungan : <b> $hasil </b></br>";
echo "<br><h3>Terima Kasih</br></h3>";


?>
</body>
</html>
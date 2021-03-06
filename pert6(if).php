<?php
if  (isset($_POST["cek"])){
	$nilai = $_POST["nilai"];
	if ($nilai==""){
		echo "<b><h3>Anda bellum memasukkan nilai </h3></b>";
	}elseif(!is_numeric($nilai)){
		echo "<b><h3>Yang anda masukkan bukan angka <h3></b>";
	}else{
		if($nilai<=30){
			echo "<b><h1>Anda Mendapat Nilai E</h1></b>";
		}elseif($nilai<=50){
			echo "<b><h1>Anda Mendapat Nilai D</h1></b>";
		}elseif($nilai<=70){
			echo "<b><h1>Anda Mendapat Nilai C</h1></b>";
		}elseif($nilai<=85){
			echo "<b><h1>Anda Mendapat Nilai AB</h1></b>";
		}else{
			echo "<b><h1>Anda Mendapat Nilai A</h1></b>";
		}
	}
}
$q = "Create";
$w = "by :";
$e = "Paramita";
$r = "evi";
$t = "MI-P.18.1K";
$y = "Stekom Kendal";
echo "<hr>";
echo "<br>$q $w $e $r $t $y</br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF=8">
	<meta name="Viewport" content="width=device-width, initial-scale=1.0">
	<title>perulangan if</title>
</head>

<body>
	<form action="" method="post">
	<label fpr="nilai">Masukkan nilai PHP anda terlebih dahulu :</label>
	<input type="text" name="nilai" id="nilai" >
	<button type="submit" name="cek">Cek </button>
</form>
</body>
</html>
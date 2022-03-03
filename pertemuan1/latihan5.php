<?php 
// ini adalah cara komentar dalam satu baris (//)
/*
	Kalau ini komentar dalam banyak baris
	tidak terhingga

	Hafiz Ramadhan
	191011402923
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test Penyisipan PHP Pada HTML</title>
</head>
<body>
	Kapal Asing, silahkan identifikasikan diri Anda!
	<?php 
	// Berikut ini adlaah inisiasi beberapa variabel
	$namad = "Jean";
	$namat = "Luc";
	$namab = "Piccard";

	$nilai1 = 25;
	$nilai2 = 50;
	$hasil  = $nilai1 * $nilai2;

	$a = 2;
	$b = 3;

	$hsl = pow($a, $b); 
	?>

	<b>Ini adalah kapal Federasi Planet USS Enterprise. <br>
		<?php 
		echo "Saya $namab, $namad $namat $namab, kapten kapal. </b> <br>";
		echo "$nilai1 x $nilai2 = $hasil <br>";
		echo "$a ^ $b = $hsl <br>";
echo "
<br><br>
Hafiz Ramadhan <br> 
191011402923";
		?>
</body>
</html>
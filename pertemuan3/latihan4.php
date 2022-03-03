<!DOCTYPE html>
<html>
<head>
	<title>Pengunaan Switch - Case</title>
</head>
<body>
	Hari ini:
	<?php 
	$hari = date('l');

	switch ($hari):
		case "Sunday" ;
			print("Minggu");
			print "Waktu untuk istirahat";
			break;
		case "Monday" ;
			print("Senin <br>");
			print "Meeting awal minggu jam 08.00";
			break;
		case "Tuesday":
		 	print("Selasa <br>");
		 	print "Pembukaan Workshop Diklat";
		 	break;
		 case "Wednesday":
		 	print("Rabu <br>");
		 	print "Seminar Launching Window Vista";
		 	break;
		 case "Thursday":
		 	print("Kamis <br>");
		 	print "Pertemuan dengan Mahasiswa";
		 	break;
		 case "Friday":
		 	print("Jum'at <br");
		 	print "Jogging bersama";
		 	break;
		 default:
		 	print("Sabtu <br>");
		 	print "Survey harga ke Dusit, Mangga Dua";
		 	break;

echo "Hafiz Ramadhan - 191011402923";
	?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Variable Static</title>
</head>
<body>
	<h1>Variable Static</h1>
	<?php
		function test()
		{
			static $a = 0;
			echo "Nilai a = $a <br>";
			$a++;
		}

		test();
		test();
		test();
		test();
		test();

		
echo "
<br><br>
Hafiz Ramadhan <br> 
191011402923";
	 ?>
</body>
</html>
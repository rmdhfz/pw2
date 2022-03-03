<!DOCTYPE html>
<html>
<head>
	<title>Contoh Penggunaan IF</title>
</head>
<body>
	<form method="post">
		Besar Pembelian:
		<input type="text" name="total_beli"> <br><br>
		<button type="submit">Tentukan Diskon</button>
	</form>
	<?php 
		if (isset($_POST['total_beli'])) {
			$total_beli = (int) $_POST['total_beli'];
			$diskon 	= 0;

			if ($total_beli >= 200000) {
				$diskon = 0.1;
			} else if ($total_beli >= 100000) {
				$diskon = 0.05;
			} else {
				$diskon = 0.01;
			}

			$diskon = $diskon * $total_beli;

			printf("Diskon = %s <br>", $diskon);
			printf("Pembayaran = %s <br>", $total_beli);

			echo "Hafiz Ramadhan - 191011402923";
		}
	?>
</body>
</html>
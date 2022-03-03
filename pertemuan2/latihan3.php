<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Sederhana</title>
	<script type="text/javascript">
		function hitung()
		{
			let nilai1 = parseInt(document.getElementById('nilai1').value),
			nilai2 = parseInt(document.getElementById('nilai2').value),
			operator = document.getElementById('operator').value,
			hasil;

			switch (operator) {
				case "+":
				hasil = nilai1 + nilai2;
				break;
				case "-":
				hasil = nilai1 - nilai2;
				break;
				case "/":
				hasil = nilai1 / nilai2;
				break;
				case "*":
				hasil = nilai1 * nilai2;
				break;
				default:
				hasil = "-";
				break;
			}
			document.getElementById('hasil').innerHTML = 'Hasilnya adalah: ' + hasil;
		}
	</script>
</head>
<body>
	<input type="number" id="nilai1" name="nilai1" required="1">
	<select id="operator" name="operator">
		<option value="" disabled="1" selected="1">Pilih</option>
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="/">/</option>
		<option value="*">*</option>
	</select>
	<input type="number" id="nilai2" name="nilai2" required="1">
	<button id="hitung" onclick="hitung();">Hitung</button>
	<p id="hasil"></p>
	Hafiz Ramadhan - 191011402923
</body>
</html>
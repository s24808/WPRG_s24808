<!DOCTYPE html>
<html>
<head>
	<title>Rectangle Area Calculator</title>
</head>
<body>
	<form method="post" action="rectangle_area.php">
		<label for="bok_a">Bok A:</label>
		<input type="number" id="bok_a" name="bok_a">
		<br>
		<label for="bok_b">Bok B:</label>
		<input type="number" id="bok_b" name="bok_b">
		<br>
		<input type="submit" value="Licz">
	</form>
    <?php
		$a = $_POST['bok_a'];
		$b = $_POST['bok_b'];
		$wynik = $a * $b;
		echo "Pole prostokąta wynosi: " . $wynik;
	?>
</body>
</html>

<!DOCTYPE html>
<html>

<head>
    <title>Calculator</title>
</head>

<body>
<form method="post" action="index.php">
    <label for="input_a">Number A:</label>
    <input type="number" id="input_a" name="input_a">
    <br>
    <label for="input_b">Number B:</label>
    <input type="number" id="input_b" name="input_b">
    <br>
    <input type="submit" value="Licz">
</form>
<?php
$a = $_POST['input_a'];
$b = $_POST['input_b'];

$dodawanie = $a + $b;
echo "<p>$a + $b = $dodawanie</p>";

$odejmowanie = $a - $b;
echo "<p>$a - $b = $odejmowanie</p>";

$mnozenie = $a * $b;
echo "<p>$a * $b = $mnozenie</p>";

if ($b == 0) {
    echo "<p>Dzielenie przez zero jest niemozliwe</p>";
} else {
    $dzielenie = $a / $b;
    echo "<p>$a / $b = $dzielenie</p>";
}


if ($b == 0) {
    echo "<p>Modulo przez zero jest niemozliwe/p>";
} else {
    $modulo = $a % $b;
    echo "<p>$a % $b = $modulo</p>";
}
?>
</body>

</html>

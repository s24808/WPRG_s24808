<!DOCTYPE html>
<html>
<body>
<form method="POST">
    <label for="num1">Podaj pierwsza liczbe:</label>
    <input type="number" id="num1" name="num1">
    <br>
    <label for="num2">Podaj druga liczbe:</label>
    <input type="number" id="num2" name="num2">
    <br>
    <label for="num3">Podaj trzecia liczbe:</label>
    <input type="number" id="num3" name="num3">
    <br>
    <input type="submit" value="Licz">
</form>

<?php
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $c = $_POST['num3'];

    $min = $a;
    if ($b < $min) {
        $min = $b;
    }
    if ($c < $min) {
        $min = $c;
    }

    $max = $a;
    if ($b > $max) {
        $max = $b;
    }
    if ($c > $max) {
        $max = $c;
    }

    $mid = ($a + $b + $c) - ($min + $max);

    echo "Rosnaco: $min, $mid, $max ";
    echo "Malejaco: $max, $mid, $min";

?>
</body>
</html>

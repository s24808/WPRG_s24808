<!DOCTYPE html>
<html>
<body>
<form method="POST">
    <label for="num1">Podaj liczby pierwszej tablicy:</label>
    <input type="number" id="num1" name="num1">
    <br>
    <label for="num2">Podaj liczby drugiej tablicy:</label>
    <input type="number" id="num2" name="num2">
    <br>
    <input type="submit" value="Licz">
</form>
<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if ($num1 <= 0 || $num2 <= 0) {
        echo "BLAD";
        exit();
    }

    $tab1 = array();
    $tab2 = array();

    for ($i = 0; $i < $num1; $i++) {
        $tab1[] = $num1;
    }
    for ($i = 0; $i < $num2; $i++) {
        $tab2[] = $num2;
    }

    $iloczyn_skalarny = 0;
    $n = min($num1, $num2);
    for ($i = 1; $i < $n; $i++) {
        $iloczyn_skalarny += $tab1[$i] * $tab2[$i];
    }

    echo "Wynik: $iloczyn_skalarny";
?>
</body>
</html>

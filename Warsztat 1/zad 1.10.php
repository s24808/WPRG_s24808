<!DOCTYPE html>
<html>
<body>
<form method="POST">
    <label for="num">Podaj liczbe:</label>
    <input type="number" id="num" name="num">
    <br>
    <input type="submit" value="Wykonaj">
</form>

<?php
$num = $_POST['num'];

if ($num <= 0) {
    echo "Podaj liczbe wieksza od 0";
    exit();
}

for ($i = 1; $i <= $num; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = 1; $i <= $num; $i++) {
    for ($j = $i; $j <= $num; $j++) {
        echo "*";
    }
    echo "<br>";
}

for ($i = 0; $i < $num; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo " ";
    }
    for ($j = $num; $j > $i; $j--) {
        echo "*";
    }
    echo "<br>";
}

for ($i = 0; $i < $num; $i++) {
    for ($j = $num - 1; $j > $i; $j--) {
        echo " ";
    }
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>
</body>
</html>

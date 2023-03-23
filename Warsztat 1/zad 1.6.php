<!DOCTYPE html>
<html>
<body>
<form method="POST">
    <label for="bok1">Podaj bok1:</label>
    <input type="number" name="bok1"><br>

    <label for="bok2">Podaj bok2:</label>
    <input type="number" name="bok2"><br>

    <label for="bok3">Podaj bok3:</label>
    <input type="number" name="bok3"><br>

    <button type="submit">Sprawdz</button>
</form>
<?php
$bok1 = $_POST["bok1"];
$bok2= $_POST["bok2"];
$bok3 = $_POST["bok3"];

if($bok1+$bok2 > $bok3 && $bok1+$bok3 > $bok2 && $bok2+$bok3 > $bok1) {
    echo "Da sie zbudowac taki trojkat";
}
else{
    echo "BLAD";
}
?>
</body>
</html>

<!DOCTYPE html>
<html>
<body>
<form method="POST">
    <label>Ilosc osob:</label>
    <select name = "wybor">
        <option value = "1">1</option>
        <option value = "2">2</option>
        <option value = "3">3</option>
        <option value = "4">4</option>
    </select>
    <input type="submit" value="Wykonaj">
</form>

<?php
$wybor = $_POST['wybor'];
echo '<form method="post">';
for($i = 1; $i <= $wybor; $i++){
    echo "Podaj dane osoby: " . $i;
    echo '<label>Imie:</label>';
    echo '<input type="text" name="imie" required>';
    echo '<br>';
    echo '<label>Nazwisko:</label>';
    echo '<input type="text" name="nazwisko" required>';
    echo '<br>';
    echo '<label>Adres:</label>';
    echo '<input type="text" name="adres" required>';
    echo '<br>';
    echo '<label>Numer karty kredytowej:</label>';
    echo '<input type="number" name="karta" required>';
    echo '<br>';
    echo '<label>E-mail:</label>';
    echo '<input type="email" name="email" required>';
    echo '<br>';
    echo '<label>Data pobytu:</label>';
    echo '<input type="date" name="data" required>';
    echo '<br>';
    echo '<label>Dodatkowe lozko::</label>';
    echo '<input type="checkbox" name="Dodatowe lozko" value="lozko">';
    echo '<br>';
    echo '<label>Udogodnienia:</label>';
    echo '<select name = "wybor1">';
    echo '<option value = "popielcznika">popielcznika</option>';
    echo '<option value = "klimatyzacja">klimatyzacja</option>';
    echo '</select>';
    echo '<br>';
}
echo '<input type="submit" value="Wykonaj">';
echo '</form>';

echo "Podsumowanie rezerewacji";
echo "<p>Ilosc osob: " . $wybor . "</p>";
for($i = 1; $i <= $wybor; $i++){
    $imie = $_POST['imie' .$i];
    $nazwisko = $_POST['nazwisko' .$i];
    $adres = $_POST['adres' .$i];
    $karta = $_POST['karta' .$i];
    $email = $_POST['email' .$i];
    $date = $_POST['date' .$i];
    $lozko = $_POST['lozko' .$i];
    $wybor1 = $_POST['wybor1' .$i];
}
?>
</body>
</html>

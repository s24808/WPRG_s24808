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
    <label>Imie:</label>
    <input type="text" name="imie" required>
    <br>
    <label>Nazwisko:</label>
    <input type="text" name="nazwisko" required>
    <br>
    <label>Adres:</label>
    <input type="text" name="adres" required>
    <br>
    <label>Numer karty kredytowej:</label>
    <input type="number" name="karta" required>
    <br>
    <label>E-mail:</label>
    <input type="email" name="email" required>
    <br>
    <label>Data pobytu:</label>
    <input type="date" name="data" required>
    <br>
    <label>Dodatkowe lozko::</label>
    <input type="checkbox" name="Dodatowe lozko" value="lozko">
    <br>
    <label>Udogodnienia:</label>
    <select name = "wybor1">
        <option value = "popielcznika">popielcznika</option>
        <option value = "klimatyzacja">klimatyzacja</option>
    </select>
    <input type="submit" value="Wykonaj">
</form>

<?php
$wybor = $_POST['wybor'];
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$adres = $_POST['adres'];
$karta = $_POST['karta'];
$email = $_POST['email'];
$data = $_POST['data'];
$lozko = $_POST['lozko'];
$wybor1 = $_POST['wybor1'];

echo '<p>Ilosc osob: ' . $wybor . '</p>';
echo '<p>Imie: ' . $imie . '</p>';
echo '<p>Nazwisko: ' . $nazwisko . '</p>';
echo '<p>Adres: ' . $adres . '</p>';
echo '<p>Karta: ' . $karta . '</p>';
echo '<p>E-mail: ' . $email . '</p>';
echo '<p>Data pobytu: ' . $data. '</p>';
echo '<p>Dodatkowe lozko: ' . $lozko . '</p>';
echo '<p>Udogodnienia: ' . $wybor1 . '</p>';
?>
</body>
</html>

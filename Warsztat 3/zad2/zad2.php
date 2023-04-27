<!DOCTYPE html>
<html>
<body>
<form method="POST" action="zapisz_rezerwacje.php">
    <label>Ilosc osob:</label>
    <input type="text" name="wybor" required>
    <br>
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
    <label>Dodatkowe lozko:</label>
    <input type="checkbox" name="lozko" value="lozko">
    <br>
    <label>Udogodnienia:</label>
    <select name = "wybor1">
        <option value = "popielniczka">popielniczka</option>
        <option value = "klimatyzacja">klimatyzacja</option>
    </select>
    <br>
    <input type="submit" value="Zapisz">
</form>
</body>
</html>

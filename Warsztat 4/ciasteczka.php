<!DOCTYPE html>
<html>
<body>
<form method="POST">
    <label>Ilosc osob:</label>
    <select name="wybor">
        <option value="1" <?php if(isset($_COOKIE['wybor']) && $_COOKIE['wybor'] == '1') echo 'wybrane'; ?>>1</option>
        <option value="2" <?php if(isset($_COOKIE['wybor']) && $_COOKIE['wybor'] == '2') echo 'wybrane'; ?>>2</option>
        <option value="3" <?php if(isset($_COOKIE['wybor']) && $_COOKIE['wybor'] == '3') echo 'wybrane'; ?>>3</option>
        <option value="4" <?php if(isset($_COOKIE['wybor']) && $_COOKIE['wybor'] == '4') echo 'wybrane'; ?>>4</option>
    </select>
    <label>Imie:</label>
    <input type="text" name="imie" value="<?php if(isset($_COOKIE['imie'])) echo $_COOKIE['imie']; ?>" required>
    <br>
    <label>Nazwisko:</label>
    <input type="text" name="nazwisko" value="<?php if(isset($_COOKIE['nazwisko'])) echo $_COOKIE['nazwisko']; ?>" required>
    <br>
    <label>Adres:</label>
    <input type="text" name="adres" value="<?php if(isset($_COOKIE['adres'])) echo $_COOKIE['adres']; ?>" required>
    <br>
    <label>Numer karty kredytowej:</label>
    <input type="number" name="karta" value="<?php if(isset($_COOKIE['karta'])) echo $_COOKIE['karta']; ?>" required>
    <br>
    <label>E-mail:</label>
    <input type="email" name="email" value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email']; ?>" required>
    <br>
    <label>Data pobytu:</label>
    <input type="date" name="data" value="<?php if(isset($_COOKIE['data'])) echo $_COOKIE['data']; ?>" required>
    <br>
    <label>Dodatkowe lozko:</label>
    <input type="checkbox" name="lozko" value="lozko" <?php if(isset($_COOKIE['lozko'])) echo 'wybrane'; ?>>
    <br>
    <label>Udogodnienia:</label>
    <select name="wybor1">
        <option value="popielcznika" <?php if(isset($_COOKIE['wybor1']) && $_COOKIE['wybor1'] == 'popielcznika') echo 'wybrane'; ?>>popielcznika</option>
        <option value="klimatyzacja" <?php if(isset($_COOKIE['wybor1']) && $_COOKIE['wybor1'] == 'klimatyzacja') echo 'wybrane'; ?>>klimatyzacja</option>
    </select>
    <input type="submit" value="Wykonaj">
    <button type="button" onclick="deleteCookies()">Wyczyść formularz</button>
</form>
<script>
function deleteCookies() {
  document.cookie = "wybor=; expires=Thu, 18 May 2023 00:00:00 GMT; path=/;";
  document.cookie = "imie=; expires=Thu, 18 May 2023 00:00:00 GMT; path=/;";
}
</script>

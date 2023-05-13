<?php
session_start();

if (isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == true) {
    // Jeśli użytkownik jest zalogowany, wyświetlamy formularz rezerwacji
    ?>
    <!DOCTYPE html>
<html>
<body>
    <form method="POST">
        <label>Ilość osób:</label>
        <select name="wybor">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <label>Imię:</label>
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
        <button type="button" onclick="window.location.href='wyloguj.php'">Wyloguj</button>
    </form>
    </body>
    </html>
<?php
}else{// Jeśli użytkownik nie jest zalogowany, wyświetlamy formularz logowania
    ?>
    <!DOCTYPE html>
    <html>
    <body>
        <form method="POST">
            <label>Login:</label>
            <input type="text" name="login" required>
            <br>
            <label>Hasło:</label>
            <input type="password" name="haslo" required>
            <br>
            <input type="submit" value="Zaloguj">
        </form>
    </body>
    </html>
<?php
}
if (isset($_POST['login'])) {
    // Jeśli użytkownik przesłał formularz logowania, sprawdzamy poprawność danych
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    if ($login == 'admin' && $haslo == 'admin123') {
        // Jeśli dane są poprawne, tworzymy sesję i ciasteczko z loginem użytkownika
        $_SESSION['zalogowany'] = true;
        setcookie('login', $login, time() + (86400 * 30), "/"); // ciasteczko ważne przez 30 dni
        echo '<p>Witaj, ' . $login . '!</p>';
    } else {
        // Jeśli dane są niepoprawne, wyświetlamy informację o błędzie
        echo '<p>Błędny login lub hasło.</p>';
    }
}

if (isset($_GET['wyloguj'])) {
    // Po naciśnieciu przycisku wyloguj, sesja zostaje zniszczona
    session_destroy();
    exit;
}

if (isset($_POST['wybor'])) {
    $wybor = $_POST['wybor'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $adres = $_POST['adres'];
    $karta = $_POST['karta'];
    $email = $_POST['email'];
    $data = $_POST['data'];
    $lozko = isset($_POST['Dodatowe lozko']) ? $_POST['Dodatowe lozko'] : 'nie';
    $udogodnienia = isset($_POST['wybor1']) ? $_POST['wybor1'] : 'brak';

    echo "<h2>Podsumowanie rezerwacji</h2>";
    echo "<p><strong>Ilość osób:</strong> $wybor</p>";
    echo "<p><strong>Imię:</strong> $imie</p>";
    echo "<p><strong>Nazwisko:</strong> $nazwisko</p>";
    echo "<p><strong>Adres:</strong> $adres</p>";
    echo "<p><strong>Numer karty kredytowej:</strong> $karta</p>";
    echo "<p><strong>E-mail:</strong> $email</p>";
    echo "<p><strong>Data pobytu:</strong> $data</p>";
    echo "<p><strong>Dodatkowe łóżko:</strong> $lozko</p>";
    echo "<p><strong>Udogodnienia:</strong> $udogodnienia</p>";
}
?>

<?php
$wybor = $_POST['wybor'];
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$adres = $_POST['adres'];
$karta = $_POST['karta'];
$email = $_POST['email'];
$data = $_POST['data'];
$lozko = isset($_POST['lozko']) ? "Tak" : "Nie";
$wybor1 = $_POST['wybor1'];

$plik = fopen("rezerwacje.txt", "a"); //otwórz plik do dopisywania

$linia = $wybor . ";" . $imie . ";" . $nazwisko . ";" . $adres . ";" . $karta . ";" . $email . ";" . $data . ";" . $lozko . ";" . $wybor1 . PHP_EOL; //stwórz linię do zapisu

fwrite($plik, $linia); //zapisz linię do pliku
fclose($plik); //zamknij plik

echo "Dane zostały zapisane."; //wyświetl informację o powodzeniu zapisu
?>

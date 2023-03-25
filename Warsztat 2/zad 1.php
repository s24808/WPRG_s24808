<!DOCTYPE html>
<html>
<body>
<form method="POST">
    <label for="num">Podaj pierwsza liczbe:</label>
    <input type="number" id="num1" name="num1">
    <br>
    <label for="num">Podaj druga liczbe:</label>
    <input type="number" id="num2" name="num2">
    <br>
    <select name = "wybor">
        <option value = "dod">Dodawanie</option>
        <option value = "ode">Odejmowanie</option>
        <option value = "mno">Mnozenie</option>
        <option value = "dzi">Dzielenie</option>
    </select>
    <input type="submit" value="Licz">
</form>

<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$wybor = $_POST['wybor'];
$result = '';

switch ($wybor) {
    case 'dod':
        $result = $num1 + $num2;
        break;
    case 'ode':
        $result = $num1 - $num2;
        break;
    case 'mno':
        $result = $num1 * $num2;
        break;
    case 'dzi':
        if ($num2==0){
            $result = "Nie mozna dzielic przez zero";
        }else{
            $result = $num1 / $num2;
        }
        break;
    default:
        $result = "Wybierz odpowiednia opcje";
}
echo "Wynik " . $result
?>
</body>
</html>

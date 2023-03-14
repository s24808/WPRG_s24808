<!DOCTYPE html>
<html>

<head>
    <title>Calculator</title>
</head>

<body>
    <form method="post" action="calculator.php">
        <label for="input_a">Number A:</label>
        <input type="number" id="input_a" name="input_a">
        <br>
        <label for="input_b">Number B:</label>
        <input type="number" id="input_b" name="input_b">
        <br>
        <input type="submit" value="Licz">
    </form>
    <?php
    $a = $_POST['input_a'];
    $b = $_POST['input_b'];

    $dodawnaie = $input_a + $input_b;
    echo "<p>$input_a + $input_b = $dodawanie</p>";

    $odejmowanie = $input_a - $input_b;
    echo "<p>$input_a - $input_b = $odejmowanie</p>";

    $mnozenie = $input_a * $input_b;
    echo "<p>$input_a * $input_b = $mnozenie</p>";

    if ($input_b == 0) {
        echo "<p>Dzielenie przez zero jest niemozliwe</p>";
    } else {
        $dzielenie = $input_a / $input_b;
        echo "<p>$input_a / $input_b = $dzielenie</p>";
    }


    if ($input_b == 0) {
        echo "<p>Modulo przez zero jest niemozliwe/p>";
    } else {
        $modulo = $input_a % $input_b;
        echo "<p>$input_a % $input_b = $modulo</p>";
    }
    ?>
</body>

</html>

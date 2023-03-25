<!DOCTYPE html>
<html>
<body>
<form method="POST">
    <label>Podaj liczbe:</label>
    <input type="num" name="num" required>;
    <input type="submit" value="Wykonaj">
</form>

<?php

$num = $_POST['num'];

    if ($num >= 1){
        echo "Liczba jest dodatnia";
        function czyliczbajestpierwsza($num) {
            for ( $i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i === 0) {
                    return false;
                }
            }
    return true;
}
    }else{
        echo "Liczba jest ujemna";

    }
?>
</body>
</html>

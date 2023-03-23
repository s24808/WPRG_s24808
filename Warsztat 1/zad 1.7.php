<!DOCTYPE html>
<html>
<body>
<form method="POST">
    <label for="month">Podaj miesiac jako liczbe:</label>
    <input type="number" id="month" name="month">
    <input type="submit" value="Zatwierdz">
</form>
<?php
    $a = $_POST['month'];

    switch ($a) {
        case 1:
            echo "Styczen ma 31 dni.";
            break;
        case 2:
            echo "Luty ma 28 dni.";
            break;
        case 3:
            echo "Marzec ma 31 dni.";
            break;
        case 4:
            echo "Kwiecien ma 30 dni.";
            break;
        case 5:
            echo "Maj ma 31 dni.";
            break;
        case 6:
            echo "Czerwiec ma 30 dni.";
            break;
        case 7:
            echo "Lipiec ma 31 dni.";
            break;
        case 8:
            echo "Sierpien ma 31 dni.";
            break;
        case 9:
            echo "Wrzesien ma 30 dni.";
            break;
        case 10:
            echo "Pazdziernik ma 31 dni.";
            break;
        case 11:
            echo "Listopad ma 30 dni.";
            break;
        case 12:
            echo "Grudzien ma 31 dni.";
            break;
        default:
            echo "BLAD";
    }
?>
</body>
</html>

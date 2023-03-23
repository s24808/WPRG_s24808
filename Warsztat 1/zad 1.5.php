<!DOCTYPE html>
<html>

<body>
<form method="post">
    <label>Podaj dwa napisy oddzielone spacją:</label>
    <input type="text" name="strings">
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['strings'])) {
    $strings = explode(' ', $_POST['strings']);
    $napis1 = $strings[0];
    $napis2 = $strings[1];

    echo "<p>%{$napis2} {$napis1}%$#</p>";
}
?>
</body>
</html>

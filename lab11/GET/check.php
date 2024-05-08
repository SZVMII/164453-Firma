<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>Wynik</title>
</head>
<body>
<?php
    $liczba = $_GET['liczba'];
    if ($liczba == 666) {
        echo "<h1>OK</h1>";
    } else {
        echo "<h1>ERROR</h1>";
    }
?>
</body>
</html>

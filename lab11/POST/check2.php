<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sprawdzanie, czy pole "number" zostało przekazane
    if(isset($_POST["number"]) && !empty($_POST["number"])) {
        // Konwertowanie wartości pola na liczbę
        $number = intval($_POST["number"]);

        // Sprawdzenie, czy podana liczba to 666
        if($number === 666) {
            echo "OK";
        } else {
            echo "ERROR";
        }
    } else {
        echo "ERROR: Brak danych.";
    }
} else {
    // Jeśli skrypt zostanie wywołany bez użycia metody POST
    echo "ERROR: Nieprawidłowe żądanie.";
}
?>

<?php
    $conn = new mysqli ("localhost", "root", "", "skrzynki") or die ("Błąd");
    $los = $conn->query("SELECT * FROM skrzynka1 ORDER BY RAND() LIMIT 1");

    while($wiersz = $los->fetch_assoc()) {
        echo "klucz: " . $wiersz["wartosc"] . ";";
    }
    /*echo "<pre>";
    print_r($los);
    echo "</pre>";*/
    $conn->close();
    ?>
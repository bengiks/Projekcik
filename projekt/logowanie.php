<?php
session_start();

$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "bazadanych";

$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);

$login = $_POST['login'];
$haslo = $_POST['haslo'];

$sql = "SELECT * FROM uzytkownicy WHERE uzytkownik='$login' AND haslo='$haslo'";

if($rezultat = $polaczenie->query($sql));
{
    $ile_uzytkownikow = $rezultat->num_rows;
    if($ile_uzytkownikow==1)
    {
        $wiersz = $rezultat->fetch_assoc();
        $_SESSION['uzytkownik'] = $wiersz['uzytkownik'];
        $_SESSION['stan konta'] = $wiersz['stan konta'];
        unset($_SESSION['blad']);
        $rezultat->free_result();
        header('Location: podstrona.php');
    } else 
        { 
            $_SESSION['blad'] = 'Nieprawidłowe dane logowania!';
            header('Location: strona startowa.php');
        }
}  
?>
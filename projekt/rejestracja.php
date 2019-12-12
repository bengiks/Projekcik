<?php
    session_start();

if(isset($_POST['login']))
{
    $poprawnosc_danych=true;

    $login = $_POST['login'];
    
    if((strlen($login)<4) || (strlen($login)>16))
    {
        $poprawnosc_danych = false;
        $_SESSION['error_login'] = "Login musi mieć od 4 do 16 znaków!";
    }
    
    if(ctype_alnum($login) == false)
    {
        $wszystko_OK = false;
        $_SESSION['error_login'] = "Login może składać się tylko z liter oraz cyfr!";
    }
    
    $haslo = $_POST['haslo'];
    $haslo2 = $_POST['haslo2'];

    if((strlen($haslo)<8) || (strlen($haslo)>24))
    {
        $poprawnosc_danych = false;
        $_SESSION['error_haslo'] = "Podane hasło musi mieć od 8 do 24 znaków!";
    }

    if($haslo != $haslo2)
    {
        $wszystko_OK = false;
        $_SESSION['error_haslo'] = "Podane hasła nie są identyczne!";
    }
    
    $haslo_hash = password_hash($haslo, PASSWORD_DEFAULT);

    $email = $_POST['email'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $poprawnosc_danych = false;
        $_SESSION['error_email'] = "Podany email jest niepoprawny!";
    }
    
    $host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "bazadanych";

    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    
    $rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE uzytkownik='$login'");

    $ile_loginow = $rezultat->num_rows;
    if($ile_loginow>0)
    {
        $poprawnosc_danych = false;
        $_SESSION['error_login'] = "Login już jest zajęty!";
        header('Location: strona startowa.php');
    }

    $rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE email='$email'");

    $ile_emaili = $rezultat->num_rows;
    if($ile_emaili>0)
    {
        $poprawnosc_danych = false;
        $_SESSION['error_email'] = "Email już jest zajęty!";
        header('Location: strona startowa.php');
    }

    if($poprawnosc_danych==true)
    {
        $polaczenie->query("INSERT INTO uzytkownicy VALUES (NULL, '$login', '$haslo_hash', '$email', 25)");
        $_SESSION['podziekowanie'] = "Dziękujemy za założenie konta! Możesz się już zalogować!";
        header('Location: strona startowa.php');
    }
}

?>
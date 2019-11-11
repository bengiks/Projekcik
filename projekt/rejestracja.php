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
    
    $haslo = $_POST['haslo'];

    if((strlen($haslo)<8) || (strlen($haslo)>24))
    {
        $poprawnosc_danych = false;
        $_SESSION['error_haslo'] = "Podane hasło musi mieć od 8 do 24 znaków!";
    }
     
    $email = $_POST['email'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)
    {
        $poprawnosc_danych = false;
        $_SESSION['error_email'] = "Podany email jest niepoprawny!";
    }
    
    $_SESSION['db_login'] = $login;
	$_SESSION['db_haslo'] = $haslo;
	$_SESSION['db_email'] = $email;
    
    $host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "bazadanych6";

    $polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
    
    $rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE uzytkownik='$login'");

    $ile_loginow = $rezultat->num_rows;
    if($ile_loginow>0)
    {
        $poprawnosc_danych = false;
        $_SESSION['db_login']= "Login już jest zajęty!";
    }

    $rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE email='$email'");

    $ile_emaili = $rezultat->num_rows;
    if($ile_emaili>0)
    {
        $poprawnosc_danych = false;
        $_SESSION['db_email']= "Email już jest zajęty!";
    }

    if($poprawnosc_danych==true)
    {
        $polaczenie->query("INSERT INTO uzytkownicy VALUES (NULL, '$login', '$haslo', '$email', 25)"))
        $_SESSION['podziekowanie'] = "Dziękujemy za założenie konta! Możesz się już zalogować!";
        header('Location: strona startowa.php');
    }
}

?>
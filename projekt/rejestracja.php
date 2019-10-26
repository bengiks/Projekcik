<?php
    session_start();

if(isset($_POST['login'])) && (isset($_POST['haslo'])) && (isset($_POST['email']))
{
    $poprawnosc_danych=true;

    $login = $_POST['login'];
    
    if(strlen($login)<4) || (strlen($login)>16) || $login == "")
    {
        $poprawnosc_danych = false;
        $_SESSION['error_login']="Login musi mieć od 4 do 16 znaków!";
    }
    
    $haslo = $_POST['haslo'];

    if(strlen($haslo)<8) || (strlen($haslo)>24) || $haslo == "")
    {
        $poprawnosc_danych = false;
        $_SESSION['error_haslo']="Podane hasło musi mieć od 8 do 24 znaków!";
    }
     
    $email = $_POST['email'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL) || $email == "")
    {
        $poprawnosc_danych = false;
        $_SESSION['error_email']="Podany email jest niepoprawny!";
    }
    
}



$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "bazadanych6";

$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);

?>
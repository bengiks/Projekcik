<?php
    session_start();

if(isset($_POST['login'])) && (isset($_POST['haslo'])) && (isset($_POST['email']))
{
    $poprawnosc_danych=true;

    $login = $_POST['login'];
    
    if(strlen($login)<4) || (strlen($login)>16)
    {
        $poprawnosc_danych=false;
        $_SESSION['error_login']="Nick musi mieć od 4 do 16 znaków!";
    }

    
}



$host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "bazadanych6";

$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);

?>
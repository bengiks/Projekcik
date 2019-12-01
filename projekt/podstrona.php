<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css.css">
    <title>podstrona</title>
</head>
<body>
<div class="stankonta">

<?php
    echo "Stan konta: ".$_SESSION['stan konta']."PLN";
    
    echo 'Witamy '.$_SESSION['uzytkownik'].'!';
    
    echo '<a href="wylogowywanie.php">Wyloguj</a>';
?>

</div>
</body>
</html>
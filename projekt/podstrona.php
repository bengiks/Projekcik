<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8"/>
    <title>podstrona</title>
</head>
<body>
<?php
    echo "<p>Zalogowano pomyślnie ".$_SESSION['uzytkownik']."!";
    echo "<p><b>Stan konta</b>: ".$_SESSION['stan konta'];
?>
</body>
</html>

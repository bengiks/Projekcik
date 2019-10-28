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
    echo "<p><b>Stan konta</b>: ".$_SESSION['stan konta']."PLN";
?>
</div>
<!-- <script type="application/javascript">
    window.alert("<?php echo "Zalogowano pomyślnie ".$_SESSION['uzytkownik']."!"; ?>")
</script> -->

</body>
</html>
<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css.css">
    <title>podstrona</title>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        function test()
        {
            $.ajax({url:"los.php" ,success:function(result)
            {
                $("div").text(result);
            }
        })
        }
        
       </script>
       
</head>
<body>
<div class="stankonta">

<?php
    echo "Stan konta: ".$_SESSION['stan konta']."PLN";
    
    echo 'Witamy '.$_SESSION['uzytkownik'].'!';
    
    echo '<a href="wylogowywanie.php">Wyloguj</a>';
?>

</div>
<button onclick="test()">losuj</button>
    <div>

    </div>
</body>
</html>
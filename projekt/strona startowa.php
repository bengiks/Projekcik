<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css.css">
  <title>Strona startowa</title>
</head>

<body>
    <div class="slogan">
        <div>
        </br></br>
            SLOGAN
        </div>
    </div>
  <div class="login-page">
    <div class="form">
      <form action="rejestracja.php" method="POST" class="register-form">
        <input type="text" placeholder="nazwa użytkownika" name="login" value="<?php
          if(isset($_SESSION['db_login']))
          {
            echo $_SESSION['db_login'];
            unset($_SESSION['db_login']);
          }
        ?>" />
        <?php
          if(isset($_SESSION['error_login']))
          {
            echo $_SESSION['error_login'];
            unset($_SESSION['error_login']);
          }
        ?>  
        
        <input type="password" placeholder="hasło" name="haslo" value="<?php
          if(isset($_SESSION['db_haslo']))
          {
            echo $_SESSION['db_haslo'];
            unset($_SESSION['db_haslo']);
          }
        ?>" />
        <?php
          if(isset($_SESSION['error_haslo']))
          {
            echo $_SESSION['error_haslo'];
            unset($_SESSION['error_haslo']);
          }
        ?>  
        
        <input type="text" placeholder="adres email" name="email" value="<?php
          if(isset($_SESSION['db_email']))
          {
            echo $_SESSION['db_email'];
            unset($_SESSION['db_email']);
          }
        ?>" />
        <?php
          if(isset($_SESSION['error_email']))
          {
            echo $_SESSION['error_email'];
            unset($_SESSION['error_email']);
          }
        ?>  
        <input type="submit" value="Stwórz konto" />
        <p class="message">Masz już konto? <a href="#">Zaloguj</a></p>
      </form>
      <form action="logowanie.php" method="POST" class="login-form">
        <input type="text" placeholder="nazwa użytkownika" name="login" />
        <input type="password" placeholder="hasło" name="haslo"/>
        <input type="submit" value="Zaloguj się"/>
        <p class="message">Nie masz k onta? <a href="#" id="zaloz">Załóż je!</a></p>
        <?php
          if(isset($_SESSION['blad']))
          echo $_SESSION['blad'];
          
          if(isset($_SESSION['podziekowanie']))
          echo $_SESSION['podziekowanie'];
        ?>
       </form>
    </div>
  </div>
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="skrypt.js"></script>
</body>

</html>
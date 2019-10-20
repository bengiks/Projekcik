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
      <form class="register-form">
        <input type="text" placeholder="nazwa użytkownika" />
        <input type="password" placeholder="hasło" />
        <input type="text" placeholder="adres email" />
        <button>Stwórz</button>
        <p class="message">Masz już konto? <a href="#">Zaloguj</a></p>
      </form>
      <form action="logowanie.php" method="POST">
        <input type="text" placeholder="nazwa użytkownika" name="login" />
        <input type="password" placeholder="hasło" name="haslo"/>
        <input type="submit" value="Zaloguj się">
        <p class="message">Nie masz konta? <a href="#" id="zaloz">Załóż je!</a></p>
        <?php
          if(isset($_SESSION['blad']))
          echo $_SESSION['blad'];
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
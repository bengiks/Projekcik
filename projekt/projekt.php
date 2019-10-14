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
  <title>Projekt</title>
</head>

<body>
  <div class="login-page">
    <div class="form">
      <form class="register-form">
        <input type="text" placeholder="name" />
        <input type="password" placeholder="password" />
        <input type="text" placeholder="email address" />
        <button>Stwórz</button>
        <p class="message">Masz już konto? <a href="#">Zaloguj</a></p>
      </form>
      <form action="logowanie.php" method="POST">
        <input type="text" placeholder="nazwa użytkownika" name="login" />
        <input type="password" placeholder="hasło" name="haslo"/>
        <input type="submit" value="Zaloguj się">
        <p class="message">Nie masz konta? <a href="#">Załóż je!</a></p>
        <?php
          if(isset($SESSION['blad']))
          echo $_SESSION['blad'];
        ?>
      </form>
    </div>
  </div>
</body>

</html>
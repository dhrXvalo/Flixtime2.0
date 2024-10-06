<?php 
    require_once 'Functies/connection.php';
    include_once 'Functies/Login.php';

    session_start();
    $login = loginSysteem();
    if ((isset($_POST['login']) && (!empty($_POST['gebruikersnaam'])))) {
        $gebruikersnaam = $_POST['gebruikersnaam'];
        $wachtwoord = $_POST['wachtwoord'];

        foreach ($login as $gegeven) {
            if (($gebruikersnaam == $gegeven['gebruikersnaam']) && ($wachtwoord == $gegeven['wachtwoord'])) {
                $_SESSION['ingelogd'] = true;
                header("Location: index.php");
                exit;
            } else {
                echo "Login mislukt";
                header("Location: login.php");
            }
        }
    }

    if (isset($_POST['loguit'])) {
        $_SESSION = [];

        session_destroy();
        header("Location: index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flixtime 2.0</title>
    <link rel="stylesheet" href="Stylesheets/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
    <link rel="stylesheet" href="CSS/stylesheet.less">
  </head>

  <body>
    <nav>
        <ul>
            <li><a href="index.php">Flixtime</a></li>
            <li><a href="films.php">Films</a></li>
            <li><a href="series.php">Series</a></li>
            <li><a href="alles.php">Alle</a></li>
            <li><a href="login.php" class="active">Login</a></li>
            <?php 
                if (!empty($_SESSION) && $_SESSION['ingelogd']) {
                    echo '
                        <li>
                            <form action="login.php" method="POST">
                                <button type="submit" name="loguit">Log uit</button>
                            </form>
                        </li>';
                }
            ?>
        </ul>
    </nav>

    <main>
        <div class="login">
            <form action="login.php" method="POST">
            <span class="inputVeld">Gebruikersnaam<input type="text" name="gebruikersnaam"></span>
            <span class="inputVeld">Wachtwoord<input type="password" name="wachtwoord"></span>
                <button type="submit" name="login">Login</button>
            </form>
            <div>New to Flixtime? <a href="register.php">Registreren</a></div>
        </div>
        
    </main>

    <footer>
        
    </footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="Javascript/jquery.js"></script>
    <script>
        
    </script>
  </body>
</html>
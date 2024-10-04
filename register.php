<?php 
    require_once 'Functies/connection.php';
    include_once 'Functies/Login.php';

    $login = loginSysteem();
    $counter = counterGebruikers();

    if (isset($_POST['registreer'])) {
        $voornaam = $_POST['voornaam'];
        $achternaam = $_POST['achternaam'];
        $emailadres = $_POST['emailadres'];
        $gebruikersnaam = $_POST['gebruikersnaam'];
        $wachtwoord = $_POST['wachtwoord'];

        $db = connectDatabase();

        $nieuw_acc_query = "INSERT INTO nieuwe_gebruiker (`voornaam`, `achternaam`, `emailadres`)
                            VALUES ('". $voornaam ."', '". $achternaam ."', '". $emailadres ."')";
        $nieuw_acc = $db->query($nieuw_acc_query);

        $nieuw_gebr_query = "UPDATE gebruiker 
                            SET gebruikersnaam = '". $gebruikersnaam ."', wachtwoord = '". $wachtwoord ."'  
                            WHERE gebruiker_id = '". ($counter + 1) ."'";
        $nieuw_gebr = $db->query($nieuw_gebr_query);

        if ($nieuw_acc && $nieuw_gebr) {
            echo "Geslaagd";
            header("Location: login.php");
        } else {
            echo "Mislukt";
        }
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
            <li><a href="index.php">Logo</a></li>
            <li><a href="films.php">Films</a></li>
            <li><a href="series.php">Series</a></li>
            <li><a href="alles.php">Alle</a></li>
            <li><a href="login.php" class="active">Inlog</a></li>
        </ul>
    </nav>

    <main>
        <div class="login">
            <form action="register.php" method="POST">
                <span class="inputVeld">Voornaam<input type="text" name="voornaam" required></span>
                <span class="inputVeld">Achternaam<input type="text" name="achternaam" required></span>
                <span class="inputVeld">Emailadres<input type="email" name="emailadres" required></span>
                <span class="inputVeld">Gebruikersnaam<input type="text" name="gebruikersnaam" required></span>
                <span class="inputVeld">Wachtwoord<input type="password" name="wachtwoord" required></span>
                <button type="submit" name="registreer">Account aanmaken</button>
                <a href="login.php">Terug naar login</a>
            </form>
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
<?php 
    require_once 'Functies/connection.php';
    include_once 'Functies/serie.php';

    $serieID = $_GET['id'];
    $db = connectDatabase();

    $series = "SELECT * FROM serie WHERE serie_id = '". $serieID ."'";
    $serie_query = $db->query($series);
    $serie_result = $serie_query->fetchall(PDO::FETCH_ASSOC);

    session_start();
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
            <li><a href="login.php">Inlog</a></li>
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
        <div class="detailLayout">
            <img src="placeholder.jpg">
            <div class="infoBox">
                <?php 
                    foreach ($serie_result as $serie) {
                        echo '   
                        <h3>'. $serie['naam'] .'</h3>
                        <div class="filmInfo">
                            <p>'. $serie['release_jaar'] .'</p>
                            <p>'. $serie['taal'] .'</p>
                            <p>'. $serie['afleveringen'] .'</p>
                        </div>
                        <h4>Beschrijving</h4>
                        <p>'. $serie['beschrijving'] .'</p>';
                    }
                ?>
            </div>
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
<?php 
    require_once 'Functies/connection.php';
    include_once 'Functies/Serie.php';
    include_once 'Functies/Film.php';

    $filmID = $_GET['id'];
    $db = connectDatabase();

    $films = "SELECT * FROM film LEFT JOIN categorie ON categorie.categorie_id = film.categorie_id WHERE film_id = '". $filmID ."'";
    $film_query = $db->query($films);
    $film_result = $film_query->fetchall(PDO::FETCH_ASSOC);

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
            <li><a href="index.php">Flixtime</a></li>
            <li><a href="films.php">Films</a></li>
            <li><a href="series.php">Series</a></li>
            <li><a href="alles.php">Alle</a></li>
            <?php 
                if (!empty($_SESSION) && $_SESSION['ingelogd']) {
                    echo '
                        <li>
                            <form action="login.php" method="POST">
                                <button type="submit" name="loguit">Log uit</button>
                            </form>
                        </li>';
                } else {
                    echo '
                        <li><a href="login.php">Login</a></li>
                    ';
                }
            ?>
        </ul>
    </nav>

    <main>
        <div class="detailLayout">
        <?php 
            foreach ($film_result as $film) {
                echo '
                <img src="Images/'. $film['naam'] .'/'. $film['film_id'] .'.webp">
                    <div class="infoBox">
            
                    <h3>'. $film['titel'] .'</h3>
                    <div class="filmInfo">
                        <p>'. $film['release_jaar'] .'</p>
                        <p>'. $film['taal'] .'</p>
                        <p>'. $film['duratie'] .'</p>
                    </div>
                    <h4>Beschrijving</h4>
                    <p>'. $film['beschrijving'] .'</p>
                </div>';        
            }
        ?>
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
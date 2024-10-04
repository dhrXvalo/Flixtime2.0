<?php 
    require_once 'Functies/connection.php';
    include_once 'Functies/Serie.php';
    include_once 'Functies/Film.php';

    //weergave van films en series
    $horror = horrorFilms();
    $action = actionFilms();
    $comedy = comedyFilms();
    $romance = romanceFilms();
    $sf = sfFilms();
    $drama = dramaSeries();
    $documentary = documentarySeries();
    $fantasy = fantasySeries();
    $thriller = thrillerSeries();

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
            <li><a href="alles.php" class="active">Alle</a></li>
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
        <div>
            <form action="alles.php" method="GET">
                <input type="search" name="zoekterm" placeholder="Zoeken..." required>
                <button type="submit">Zoek</button>
            </form>
        </div>

        <?php 
            //zoekbalk functie

            $db = connectDatabase();

            if (isset($_GET['zoekterm'])) {
                $zoekterm = $_GET['zoekterm'];

                $zoekFilm = "SELECT titel AS titel, beschrijving FROM film WHERE titel LIKE '%$zoekterm%'";
                $zoek_query = $db->query($zoekFilm);
                $zoekFilm_result = $zoek_query->fetchall(PDO::FETCH_ASSOC);

                $zoekSerie = "SELECT naam AS titel, beschrijving FROM serie WHERE naam LIKE '%$zoekterm%'";
                $zoek_query = $db->query($zoekSerie);
                $zoekSerie_result = $zoek_query->fetchall(PDO::FETCH_ASSOC);

                $zoek_resultaat = array_merge($zoekFilm_result, $zoekSerie_result);
                // print_r($zoek_resultaat);

                ?>
                <h3>Resultaten</h3>
                <div class="searchBoxes">
                    <?php
                    foreach ($zoek_resultaat as $gevonden) {
                        echo '
                            <div class="searchBox">
                                <div class="card" style="width: 18rem;">
                                    <img src="placeholder.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $gevonden["titel"] . ' </h5>
                                        <p class="card-text">' . $gevonden["beschrijving"] .'</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>';
                    }
                    ?>
                </div>
            <?php
            }
        ?>

        <div class="horizontal">
            <h3>Horror</h3>
            <div class="boxes">
                <?php 
                    foreach ($horror as $horrorFilm) {
                        echo '
                        <div class="box">
                            <div class="card" style="width: 18rem;">
                                <img src="placeholder.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">' . $horrorFilm["titel"] . ' </h5>
                                    <p class="card-text">' . $horrorFilm["beschrijving"] .'</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>';
                    }
                ?>
            </div>

            <h3>Action</h3>
            <div class="boxes">
                <?php 
                    foreach ($action as $actionFilm) {
                        echo '
                        <div class="box">
                            <div class="card" style="width: 18rem;">
                                <img src="placeholder.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">' . $actionFilm["titel"] . ' </h5>
                                    <p class="card-text">' . $actionFilm["beschrijving"] .'</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>';
                    }
                ?>
            </div>

            <h3>Comedy</h3>
            <div class="boxes">
                <?php 
                    foreach ($comedy as $comedyFilm) {
                        echo '
                        <div class="box">
                            <div class="card" style="width: 18rem;">
                                <img src="placeholder.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">' . $comedyFilm["titel"] . ' </h5>
                                    <p class="card-text">' . $comedyFilm["beschrijving"] .'</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>';
                    }
                ?>
            </div>

            <h3>Romance</h3>
            <div class="boxes">
                <?php 
                    foreach ($romance as $romanceFilm) {
                        echo '
                        <div class="box">
                            <div class="card" style="width: 18rem;">
                                <img src="placeholder.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">' . $romanceFilm["titel"] . ' </h5>
                                    <p class="card-text">' . $romanceFilm["beschrijving"] .'</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>';
                    }
                ?>
            </div>

            <h3>Science Fiction</h3>
            <div class="boxes">
                <?php 
                    foreach ($sf as $sfFilm) {
                        echo '
                        <div class="box">
                            <div class="card" style="width: 18rem;">
                                <img src="placeholder.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">' . $sfFilm["titel"] . ' </h5>
                                    <p class="card-text">' . $sfFilm["beschrijving"] .'</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>';
                    }
                ?>
            </div>

            <h3>Drama</h3>
            <div class="boxes">
                <?php 
                    foreach ($drama as $dramaFilm) {
                        echo '
                        <div class="box">
                            <div class="card" style="width: 18rem;">
                                <img src="placeholder.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">' . $dramaFilm["naam"] . ' </h5>
                                    <p class="card-text">' . $dramaFilm["beschrijving"] .'</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>';
                    }
                ?>
            </div>
            
            <h3>Documentary</h3>
            <div class="boxes">
                <?php 
                    foreach ($documentary as $docuFilm) {
                        echo '
                        <div class="box">
                            <div class="card" style="width: 18rem;">
                                <img src="placeholder.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">' . $docuFilm["naam"] . ' </h5>
                                    <p class="card-text">' . $docuFilm["beschrijving"] .'</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>';
                    }
                ?>
            </div>

            <h3>Fantasy</h3>
            <div class="boxes">
                <?php 
                    foreach ($fantasy as $fantasyFilm) {
                        echo '
                        <div class="box">
                            <div class="card" style="width: 18rem;">
                                <img src="placeholder.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">' . $fantasyFilm["naam"] . ' </h5>
                                    <p class="card-text">' . $fantasyFilm["beschrijving"] .'</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>';
                    }
                ?>
            </div>

            <h3>Thriller</h3>
            <div class="boxes">
                <?php 
                    foreach ($thriller as $thrillerFilm) {
                        echo '
                        <div class="box">
                            <div class="card" style="width: 18rem;">
                                <img src="placeholder.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">' . $thrillerFilm["naam"] . ' </h5>
                                    <p class="card-text">' . $thrillerFilm["beschrijving"] .'</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>';
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
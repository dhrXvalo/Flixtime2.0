<?php 
    require_once 'Functies/connection.php';
    include_once 'Functies/Serie.php';
    include_once 'Functies/Film.php';

    $horror = horrorFilms();
    $action = actionFilms();
    $comedy = comedyFilms();
    $romance = romanceFilms();
    $sf = sfFilms();
    $drama = dramaSeries();
    $documentary = documentarySeries();
    $fantasy = fantasySeries();
    $thriller = thrillerSeries();

    // print_r($action);
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
            <li><a href="index.php" class="active">Logo</a></li>
            <li><a href="films.php">Films</a></li>
            <li><a href="series.php">Series</a></li>
            <li><a href="#">Alle</a></li>
            <li><a href="#">Inlog</a></li>
        </ul>
    </nav>

    <main>
        <div>
            <iframe width="560" height="315" allow="autoplay" src="https://www.youtube.com/embed/wE8s993ZV-8?autoplay=1&mute=1"></iframe>
        </div>

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
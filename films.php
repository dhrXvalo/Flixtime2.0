<?php 
    require_once 'connection.php';

    $horror = horrorFilms();
    $action = actionFilms();
    $comedy = comedyFilms();
    $romance = romanceFilms();
    $sf = sfFilms();

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
            <li><a href="index.php">Logo</a></li>
            <li><a href="films.php" class="active">Films</a></li>
            <li><a href="#">Series</a></li>
            <li><a href="#">Alle</a></li>
            <li><a href="#">Inlog</a></li>
        </ul>
    </nav>

    <main>
        <div>
            <iframe width="560" height="315" allow="autoplay" src="https://www.youtube.com/embed/8Yrbi4tGvIs?autoplay=1&mute=1"></iframe>
        </div>

        <div class="filterNav">
            <ul id="tabNav">
                <li><a href="#!">Alles</a></li>
                <li><a href="#!">Horror</a></li>
                <li><a href="#!">Action</a></li>
                <li><a href="#!">Comedy</a></li>
                <li><a href="#!">Romance</a></li>
                <li><a href="#!">Science Fiction</a></li>
            </ul>
        </div>

        <div class="horizontal" id="filterTabs">
            <div>
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
            </div>
            
            <div>
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
            </div>

            <div>
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
            </div>

            <div>
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
            </div>

            <div>
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
            </div>
        </div>
        
    </main>

    <footer>
        
    </footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="Javascript/jquery.js"></script>
    <script>
        $(function() {
            $('#tabNav a:first').addClass('active');
            $('#tabNav a').click(function() {
            var a = $('#tabNav a').index(this);
            console.log('index' , a);

            if (a == 0) {
                $('#filterTabs > div').show();
            } else {
                $('#filterTabs > div').hide();
                $('#filterTabs > div').eq(a -1).show();
            }

            $('#tabNav a').removeClass();
            $('#tabNav a:eq(' + a + ')').addClass('active');
            });
        });
    </script>
  </body>
</html>
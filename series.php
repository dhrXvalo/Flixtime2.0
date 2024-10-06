<?php 
    require_once 'Functies/connection.php';
    include_once 'Functies/Serie.php';

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
            <li><a href="films.php">films</a></li>
            <li><a href="series.php" class="active">Series</a></li>
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
        <div>
            <iframe width="560" height="315" allow="autoplay" src="https://www.youtube.com/embed/HVC6RL3TyZI?autoplay=1&mute=1"></iframe>
        </div>

        <div class="filterNav">
            <ul id="tabNav">
                <li><a href="#!">Alles</a></li>
                <li><a href="#!">Drama</a></li>
                <li><a href="#!">Documentary</a></li>
                <li><a href="#!">Fantasy</a></li>
                <li><a href="#!">Thriller</a></li>
            </ul>
        </div>

        <div class="horizontal" id="filterTabs">
            <div>
                <h3>Drama</h3>
                <div class="boxes">
                    <?php 
                        foreach ($drama as $dramaSerie) {
                            echo '
                            <div class="box">
                                <div class="card" style="width: 18rem;">
                                    <img src="placeholder.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $dramaSerie["naam"] . ' </h5>
                                        <p class="card-text">' . $dramaSerie["beschrijving"] .'</p>
                                        <a href="seriedetail.php?id='. $dramaSerie['serie_id'] .'" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>';
                        }
                    ?>
                </div>
            </div>
            
            <div>
                <h3>Documentary</h3>
                <div class="boxes">
                    <?php 
                        foreach ($documentary as $docuSerie) {
                            echo '
                            <div class="box">
                                <div class="card" style="width: 18rem;">
                                    <img src="placeholder.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $docuSerie["naam"] . ' </h5>
                                        <p class="card-text">' . $docuSerie["beschrijving"] .'</p>
                                        <a href="seriedetail.php?id='. $docuSerie['serie_id'] .'" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>';
                        }
                    ?>
                </div>
            </div>

            <div>
                <h3>Fantasy</h3>
                <div class="boxes">
                    <?php 
                        foreach ($fantasy as $fantasySerie) {
                            echo '
                            <div class="box">
                                <div class="card" style="width: 18rem;">
                                    <img src="placeholder.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $fantasySerie["naam"] . ' </h5>
                                        <p class="card-text">' . $fantasySerie["beschrijving"] .'</p>
                                        <a href="seriedetail.php?id='. $fantasySerie['serie_id'] .'" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>';
                        }
                    ?>
                </div>
            </div>

            <div>
                <h3>Thriller</h3>
                <div class="boxes">
                    <?php 
                        foreach ($thriller as $thrillerSerie) {
                            echo '
                            <div class="box">
                                <div class="card" style="width: 18rem;">
                                    <img src="placeholder.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $thrillerSerie["naam"] . ' </h5>
                                        <p class="card-text">' . $thrillerSerie["beschrijving"] .'</p>
                                        <a href="seriedetail.php?id='. $thrillerSerie['serie_id'] .'" class="btn btn-primary">Go somewhere</a>
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
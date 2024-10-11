<?php
    require_once 'Functies/connection.php';

    function Films($cat) {
        $db = connectDatabase();

        $films = "SELECT * FROM film LEFT JOIN categorie AS cat ON cat.categorie_id = film.categorie_id WHERE cat.naam = '$cat'";
        $film_query = $db->query($films);
        $film_result = $film_query->fetchall(PDO::FETCH_ASSOC);

        return $film_result;
    }

    function horrorFilms() {
        $db = connectDatabase();

        $films = "SELECT * FROM film WHERE categorie_id = 4";
        $film_query = $db->query($films);
        $film_result = $film_query->fetchall(PDO::FETCH_ASSOC);

        return $film_result;
    }

    function actionFilms() {
        $db = connectDatabase();

        $films = "SELECT * FROM film WHERE categorie_id = 1";
        $film_query = $db->query($films);
        $film_result = $film_query->fetchall(PDO::FETCH_ASSOC);

        return $film_result;
    }

    function comedyFilms() {
        $db = connectDatabase();

        $films = "SELECT * FROM film WHERE categorie_id = 2";
        $film_query = $db->query($films);
        $film_result = $film_query->fetchall(PDO::FETCH_ASSOC);

        return $film_result;
    }

    function romanceFilms() {
        $db = connectDatabase();

        $films = "SELECT * FROM film WHERE categorie_id = 6";
        $film_query = $db->query($films);
        $film_result = $film_query->fetchall(PDO::FETCH_ASSOC);

        return $film_result;
    }

    function sfFilms() {
        $db = connectDatabase();

        $films = "SELECT * FROM film WHERE categorie_id = 5";
        $film_query = $db->query($films);
        $film_result = $film_query->fetchall(PDO::FETCH_ASSOC);

        return $film_result;
    }
?>
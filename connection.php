<?php
    function connectDatabase() {
        $host = 'localhost';
        $dbname = 'flixtime';
        $user = 'root';
        $password = '';

        $conn = new PDO ('mysql:host='.$host.'; dbname='.$dbname, $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;
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
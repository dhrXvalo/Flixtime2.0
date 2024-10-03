<?php 
    require_once 'Functies/connection.php';

    function dramaSeries() {
        $db = connectDatabase();

        $series = "SELECT * FROM serie WHERE categorie_id = 3";
        $serie_query = $db->query($series);
        $serie_result = $serie_query->fetchall(PDO::FETCH_ASSOC);

        return $serie_result;
    }

    function documentarySeries() {
        $db = connectDatabase();

        $series = "SELECT * FROM serie WHERE categorie_id = 7";
        $serie_query = $db->query($series);
        $serie_result = $serie_query->fetchall(PDO::FETCH_ASSOC);

        return $serie_result;
    }

    function fantasySeries() {
        $db = connectDatabase();

        $series = "SELECT * FROM serie WHERE categorie_id = 8";
        $serie_query = $db->query($series);
        $serie_result = $serie_query->fetchall(PDO::FETCH_ASSOC);

        return $serie_result;
    }

    function thrillerSeries() {
        $db = connectDatabase();

        $series = "SELECT * FROM serie WHERE categorie_id = 9";
        $serie_query = $db->query($series);
        $serie_result = $serie_query->fetchall(PDO::FETCH_ASSOC);

        return $serie_result;
    }
?>
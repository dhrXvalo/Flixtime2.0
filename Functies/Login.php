<?php 
    function loginSysteem() {
        $db = connectDatabase();

        $gebruikers = "SELECT * FROM gebruiker";
        $gebruiker_query = $db->query($gebruikers);
        $gebruiker_result = $gebruiker_query->fetchall(PDO::FETCH_ASSOC);

        return $gebruiker_result;
    }

    function counterGebruikers() {
        $db = connectDatabase();

        $gebruikers = "SELECT COUNT(gebruiker_id) AS totaal FROM gebruiker";
        $gebruikers_query = $db->query($gebruikers);
        $gebruikers_result = $gebruikers_query->fetchall(PDO::FETCH_ASSOC);

        $ID = 0;

        foreach ($gebruikers_result as $totaal) {
            $ID = $totaal['totaal'];
        }

        return $ID;
    }
?>
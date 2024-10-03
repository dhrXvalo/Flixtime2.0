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
?>
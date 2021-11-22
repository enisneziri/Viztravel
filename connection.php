<?php

    $mysqli = new mysqli("mongodb://enisneziri_enisneziri1:Enisnisi1!@mongo.db.mdbgo.com:8604/enisneziri_viztravelcomp");

        // Check connection
            if ($mysqli -> connect_errno) {
                echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
             exit();
}
?>


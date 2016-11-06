<?php
    $file="messages.txt";

    if (filesize($file) == 0){
        echo "Le livre d'or est déjà vide!";
    } else {
        file_put_contents($file, "");
        echo "Nettoyage terminé.";
    }

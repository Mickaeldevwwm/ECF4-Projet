<?php
    require 'modele.php';
    try {
        $constructeurs = getconstructeurs();

        // Affichage des données
        require 'vues/vueListeConstructeurs.php';

    } catch (Exception $ex) {
        $msgErreur = $e->getMessage();
        require 'vues/vueErreur.php';
    }



?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require 'modele.php';
    try {
        $LastVehicules = getLastVehicules();
        $RandConstructeur = getRandConstructeur();

        // Affichage des données
        require 'vues/vueAccueil.php';

    } catch (Exception $ex) {
        $msgErreur = $e->getMessage();
        require 'vues/vueErreur.php';
    }
?>

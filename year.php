<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

require 'modele.php';

try{
    if(isset($_GET['id'])){
        $id = intval($_GET['id']);
        if ($id!=0){
            $vehicules = getVehiculesdate($id);
            require 'vues/vueyear.php';
        } else{
            throw new Exception('Identifiant incorrect');
        }
    } else{
        throw new Exception('Aucun billet');
    }
} catch (Exception $ex) {
    $msgErreur = $ex->getMessage();
    require 'vues/vueErreur.php';
}

;?>

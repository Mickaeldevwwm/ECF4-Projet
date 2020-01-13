<?php

require 'modele.php';

try{
    if(isset($_GET['id'])){
        $id = intval($_GET['id']);
        if ($id!=0){
            $vehicule= getVehicule($id);
            require 'vues/vueVehicule.php';
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
?>

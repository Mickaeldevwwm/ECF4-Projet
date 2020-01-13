<?php

//Cette fonction me permet de récuper tout les constructeurs présent dans la base de données classé sous forme alphabetique.//
function getConstructeurs(){
    $bdcon = getBdd();
    $constructeurs = $bdcon->prepare('select Constructeur_ID as id, Constructeur_TITRE as titre, Constructeur_CONTENU as contenu from Constructeur order by Constructeur_TITRE ASC');
    $constructeurs->execute();
    return $constructeurs;
}
//Cette fonction me permet de récuper un constructeur de maniere aléatoire dans la base de données.//
function getRandConstructeur(){
    $bdcon = getBdd();
    $RandConstructeur = $bdcon->prepare('select Constructeur_ID as id, Constructeur_TITRE as titre, Constructeur_CONTENU as contenu from Constructeur ORDER BY RAND() LIMIT 1');
    $RandConstructeur->execute(array());
    return $RandConstructeur->fetch();
  }
//Cette fonction me permet de récuper un constructeur selon son ID dans la base de données.//
function getConstructeur($idConstructeur){
    $bdcon = getBdd();
    $constructeur = $bdcon->prepare('select Constructeur_ID as id, Constructeur_TITRE as titre, Constructeur_CONTENU as contenu from Constructeur WHERE Constructeur_ID = ?');
    $constructeur->execute(array($idConstructeur));
    if($constructeur->rowcount() == 1){
        return $constructeur->fetch();
    } else{
        throw new Exception("Aucun billet ne correspond à l'identifiant '.$idConstructeur'");
    }

}
//Cette fonction me permet de récuper les 3 derniers véhicule rentré dans la base de données.//
function getLastVehicules(){
    $bdcon = getBdd();
    $Lastvehicules = $bdcon->prepare('select Modele_ID as id, Modele_TITRE as titre, Constructeur_Titre as createur, Modele_DATE as date from Modele LEFT JOIN Constructeur ON Modele.Modele_AUTEUR_ID = Constructeur.Constructeur_ID order by Modele_ID DESC LIMIT 3;');
    $Lastvehicules->execute();
    return $Lastvehicules;
}

//Cette fonction me permet de récuper les tout les véhicules rentré dans la base de données.//
function getVehicules(){
    $bdcon = getBdd();
    $vehicules = $bdcon->prepare('select Modele_ID as id, Modele_TITRE as titre, Constructeur_Titre as createur, Modele_DATE as date from Modele LEFT JOIN Constructeur ON Modele.Modele_AUTEUR_ID = Constructeur.Constructeur_ID;');
    $vehicules->execute();
    return $vehicules;
}

//Cette fonction me permet de récuper un véhicule précis dans la base de données.//
function getVehicule($idVehicule){
    $bdcon = getBdd();
    $vehicule = $bdcon->prepare('select Modele_ID as id, Modele_TITRE as titre, Constructeur_Titre as createur, Modele_AUTEUR_ID as auteurID, Modele_DATE as date from Modele LEFT JOIN Constructeur ON Modele.Modele_AUTEUR_ID = Constructeur.Constructeur_ID WHERE Modele_ID = ?');
    $vehicule->execute(array($idVehicule));
    if($vehicule->rowcount() == 1){
        return $vehicule->fetch();
    } else{
        throw new Exception("Aucun billet ne correspond à l'identifiant '$idVehicule'");
    }
}


function getVehiculesdate($date){
    $bdcon = getBdd();
    $vehicules = $bdcon->prepare('select Modele_ID as id, Modele_TITRE as titre, Constructeur_Titre as createur, Modele_DATE as date from Modele LEFT JOIN Constructeur ON Modele.Modele_AUTEUR_ID = Constructeur.Constructeur_ID WHERE Modele_date =?');
    $vehicules->execute(array($date));
    return $vehicules;
}

function getVehiculescons($idConstructeur){
    $bdcon = getBdd();
    $vehicules = $bdcon->prepare('select Modele_ID as id, Modele_TITRE as titre, Constructeur_Titre as createur, Modele_DATE as date from Modele LEFT JOIN Constructeur ON Modele.Modele_AUTEUR_ID = Constructeur.Constructeur_ID WHERE Modele_AUTEUR_ID =?');
    $vehicules->execute(array($idConstructeur));
    return $vehicules;
    }

function ajoutcons($constitre, $descrip){
        $bdcon = getBdd();
        $constructeur = $bdcon->prepare("INSERT INTO constructeur (Constructeur_TITRE, Constructeur_CONTENU) VALUES (:constitre, :descrip)");
        $constructeur->execute(array(
          'constitre' => $constitre,
          'descrip' => $descrip
        ));
        echo 'un nouveau constructeur est inscrit dans la base de données.';
      }

      function ajoutveh($fab, $ann, $vtitre){
              $bdcon = getBdd();
              $constructeur = $bdcon->prepare("INSERT INTO modele (Modele_TITRE, Modele_AUTEUR_ID, Modele_DATE) VALUES (:titre, :fabricant, :annee)");
              $constructeur->execute(array(
                'titre' => $vtitre,
                'fabricant' => $fab,
                'annee' => $ann                
              ));
              echo 'un nouveau modele est inscrit dans la base de données.';
            }





// Effectue la connexion à la BDD
// Instancie et renvoi l'objet PDO associé
function getBdd(){
    $bdd = new PDO('mysql:host=localhost;dbname=automobile;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
}

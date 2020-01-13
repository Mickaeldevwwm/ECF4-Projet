<?php $titre= $vehicule['titre'] ?>
<?php ob_start();?>

<div class="container">
  <div class="row text-center d-flex justify-content-center">
    <figure>
   <?php echo '<img class="img-thumbnail"  src="img/'.$vehicule['createur'].'-'.$vehicule['titre'].'-'.$vehicule['date'].'.png" alt="une photo de la voiture '.$vehicule['titre'].'">';?>
    <figcaption class="text-warning text-center">
<br>

<h3><a class="text-decoration-none text-warning text-center" href="<?= "constructeur.php?id=".$vehicule['auteurID']?>" ><?= $vehicule['createur'] ?> - </a>
<?= $vehicule['titre'] ?>
<a class="text-decoration-none text-warning text-center" href="<?= "year.php?id=".$vehicule['date']?>" > - <?= $vehicule['date'] ?></a>


    </figcaption>
     </figure>
  </div>

  </div>

<!-- Affichage des commentaires -->

<?php $contenu = ob_get_clean();?>

<?php require 'gabarit.php';?>


 <!-- .' modele '.$vehicule['titre'].' de '.$vehicule['date']  ?> -->

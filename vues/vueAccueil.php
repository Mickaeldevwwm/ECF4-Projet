<?php $titre='Accueil';?>
<?php ob_start();?>

<div class="container">
  <div class="row d-flex">

    <div class="col-12 text-center">
    <h1 class="text-light">Introduction</h1>
    <p class="description text-warning text-center">Dans les années 30 et 40, les constructeurs automobiles français allièrent à l’aérodynamisme de la carrosserie, l'esthétisme stylistique.
Au cours d'une trentaine d’années on était passé de la voiture à caisse carrée, dérivée du fiacre ou de la calèche, aux somptueuses carrosseries aux courbes et galbes voluptueux. L'élan dynamique et affiné des lignes se mariait à l'ondoiement et aux volutes des ailes, capots, habitacles et coffres.
Dès lors, Les profils s'étirent en mouvance féminine, les proues, parées de chromes, s'élargissent et se virilisent avec cette retenue tout à fait remarquable dans l’agressivité, les poupes s'abaissent et s’allongent, la ligne de fuite veut que l'auto colle à la route.</p>
</div>
<hr>

<div class="col-12 text-center">
    <a class="constructeurliste" href="<?= "constructeur.php?id=".$RandConstructeur['id']?>"><h2><?= $RandConstructeur['titre'] ?></h2></a>
    <p class="description text-light text-center">  <?php echo $RandConstructeur['contenu']; ?></p>
</div>
<hr>

    <?php foreach ($LastVehicules as $LastVehicule): ?>
   <div class="col-12 col-lg-4">

     <a href="<?= "vehicule.php?id=".$LastVehicule['id']?>">
      <figure>
          <?php echo '<img class="img-thumbnail" src="img/'.$LastVehicule['createur'].'-'.$LastVehicule['titre'].'-'.$LastVehicule['date'].'.png" class="img-fluid w-100">';?>
          <figcaption class="text-warning text-center"><?php echo $LastVehicule['createur'].'-'.$LastVehicule['titre'].'-'.$LastVehicule['date'] ?></figcaption>
      </figure>
</a>
</div>

<?php endforeach; ?>

</div>
</div>
<?php $contenu = ob_get_clean();?>

<?php require 'gabarit.php';?>

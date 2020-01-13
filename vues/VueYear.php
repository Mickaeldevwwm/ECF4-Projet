<?php $titre='Liste des véhicules de l année';?>
<?php ob_start();?>

<div class="container">
    <div class="row justify-content-center">
<h1 class="text-light text-center col-12"> <?php echo $_GET['id'] ?></h1>
    <?php foreach ($vehicules as $vehicule): ?>
    <div class="listevoiturestest col-sm-12 col-md-4 col-lg-3">
      <a href="<?= "vehicule.php?id=".$vehicule['id']?>">
      <figure>
          <?php echo '<img class="img-thumbnail" src="img/'.$vehicule['createur'].'-'.$vehicule['titre'].'-'.$vehicule['date'].'.png" class="img-fluid w-100">';?>
          <figcaption class="text-warning text-center"> <?php echo $vehicule['createur'].'-'.$vehicule['titre'].'-'.$vehicule['date'] ?></figcaption>
      </figure>
</a>
</div>

<?php endforeach; ?>
</div>
</div>
<?php $contenu = ob_get_clean();?>

<?php require 'gabarit.php';?>

<?php $titre= $constructeur['titre'] ?>

<?php ob_start();?>

<div class="container">
  <div class="row d-flex justify-content-center">

    <div>
        <h1 class="text-warning text-center "><?= $constructeur['titre']?></h1>
        <p class="description text-light text-center"><?= $constructeur['contenu']?></p>
</div>

        <?php foreach ($vehicules as $vehicule): ?>

      <div class="listevoiturestest col-sm-12 col-md-4 col-lg-3">
        <a href="<?= "vehicule.php?id=".$vehicule['id']?>">
        <figure>
            <?php echo '<img class="img-thumbnail" src="img/'.$vehicule['createur'].'-'.$vehicule['titre'].'-'.$vehicule['date'].'.png" class="img-fluid w-100">';?>
            <figcaption class="text-warning text-center"><?php echo $vehicule['createur'].'-'.$vehicule['titre'].'-'.$vehicule['date'] ?></figcaption>
        </figure>
  </a>
  </div>

  <?php endforeach; ?>
  </div>
  </div>


<!-- Affichage des commentaires -->

<?php $contenu = ob_get_clean();?>

<?php require 'gabarit.php';?>

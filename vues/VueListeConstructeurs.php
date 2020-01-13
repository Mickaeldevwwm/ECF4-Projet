<?php $titre='ListeConstructeur';?>
<?php ob_start();?>

<div class="container">
<div class="row d-flex justify-content-center">


<?php foreach ($constructeurs as $constructeur): ?>
<div class="constructeurliste col-sm-12 col-md-6 col-lg-4 text-center">

<a class="text-warning text-decoration-none" href="<?= "constructeur.php?id=".$constructeur['id']?>"><h1><?= $constructeur['titre'] ?></h1></a>

</div>


<?php endforeach; ?>
</div>
</div>
<hr>
<?php $contenu = ob_get_clean();?>

<?php require 'gabarit.php';?>

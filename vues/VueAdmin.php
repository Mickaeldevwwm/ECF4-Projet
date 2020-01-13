<?php $titre='Admin';?>
<?php ob_start();?>
<div class="container">
  <div class="row">


<form name="Ajout-constructeur" class="bg-warning col-12 text-center p-2 mt-2 mb-2" action="traitement.php" method="post">
  <fieldset>
    <legend>Ajouter un constructeur</legend>
      <input class="text-center mb-2" type="text" name="Constructeur-titre" placeholder="Nom du constructeur" value="" required>
  <br>
  <textarea class="col-12 mb-2" rows="10" name="Description" placeholder="Description du constructeur" required></textarea>
    <input type="submit" name="Ajouter-constructeur" value="Ajouter">
  <br>
</fieldset>
</form>

<form name="Ajout-vehicule" class="col-12 bg-warning mt-2 mb-2 p-2 text-center" action="traitement.php" method="post">
  <fieldset>
    <legend>Ajouter un véhicule</legend>
  <div class="container">
    <div class="row">
  <div class="col-12 text-center d-flex flex-column justify-content-center align-items-center">
    <select class="text-center m-1" name="Constructeur">
      <?php foreach ($constructeurs as $constructeur): ?>
        <option value="<?= $constructeur['id'] ?>"><?= $constructeur['titre'] ?></option>
  <?php endforeach; ?>
    </select>
<input class="text-center m-1" type="text" name="Annee" placeholder="Année" value="" required>
<input class="text-center m-1" type="text" name="Modele" placeholder="Modele" value="" required>
<div class="custom-file">
<input type="file" class="custom-file-input" name="Photographie" accept="image/png" lang="fr">
<label class="custom-file-label" for="customFile">Image</label>
</div>
<input type="submit" name="Ajouter-vehicule" value="Ajouter">
</div>
</div>
</div>
</fieldset>
</form>

    <?php foreach ($constructeurs as $constructeur): ?>

<form name="modif-constructeur" class="bg-warning col-12 text-center p-2 mt-2 mb-2" action="traitement.php" method="post">
  <fieldset>
    <legend>Modifier les informations d'un constructeur</legend>
  <input class="col-12 text-center" type="hidden" name="constructeur-id" value="<?= $constructeur['id'] ?>">
  <input class="text-center mb-2" type="text" name="" value="<?= $constructeur['titre'] ?>">
  <br>
  <textarea class="col-12 mb-2" rows="10" name="user_message"><?= $constructeur['contenu'] ?></textarea>
  <input type="submit" name="suprimer-constructeur" value="Suprimer">
  <input type="submit" name="Modifier-constructeur" value="Modifier">
</fieldset>
</form>
    <?php endforeach; ?>


    <?php foreach ($vehicules as $vehicule): ?>

      <form name="Modif-vehicule" class="col-12 bg-warning p-2 mt-2 mb-2 text-center" action="traitement.php" method="post">
        <fieldset>
          <legend>Modifier les informations d'un véhicule</legend>
        <div class="container">
          <div class="row">
            <input class="col-12 text-center" type="hidden" name="vechicule-id" value="<?= $vehicule['id'] ?>">
<div class="col-6 p-3 d-none d-lg-block">
<img class="img-thumbnail w-100 img-fluid" alt="test" src="img/<?php echo $vehicule['createur'].'-'.$vehicule['titre'].'-'.$vehicule['date'] ?>.png">
</div>
<div class="col-sm-12 col-lg-6 text-center d-flex flex-column justify-content-center align-items-center">
  <input class="text-center m-1" type="text" name="Constructeur" value="<?= $vehicule['createur'] ?>">
  <input class="text-center m-1" type="text" name="Annee" value="<?= $vehicule['date'] ?>">
  <input class="text-center m-1" type="text" name="Modele" value="<?= $vehicule['titre'] ?>">

  <div class="custom-file">
  <input type="file" class="custom-file-input" name="Photographie" accept="image/png">
  <label class="custom-file-label" for="customFile">Image</label>
</div>
  <input  class="m-1" type="submit" name="Modifier-vehicule" value="Modifier">
  <input  class="m-1" type="submit" name="suprimer-vehicule" value="Suprimer">
  </div>
  </div>
  </div>
</fieldset>
  </form>

<?php endforeach; ?>


</div>
</div>
<?php $contenu = ob_get_clean();?>

<?php require 'gabarit.php';?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
        <link href="https://fonts.googleapis.com/css?family=Girassol|Merriweather+Sans:300,300i,400,400i,700,700i,800,800i&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css" />
        <title><?= $titre; ?></title>
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <a class="navbar-brand" href="index.php">Voiture De Collection</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="ListeConstructeurs.php">Liste des Constructeurs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="liste.php">Liste des véhicules</a>
            </li>
             </ul>
        </div>
      </nav>

<div class="imgtest"></div>
<hr>
      </header>
        <div id="global">

              <div id="contenu">
                <?= $contenu;  ?> <!-- Elémént spécifique -->
            </div> <!-- #contenu -->
            <footer id="piedBlog">
                <p class="text-center text-warning">Ce site à été réalisé par <a class="text-decoration-none text-light" href="mailto:mickael.balin@gmail.com">Mickaël Balin</a> lors de la session 2019/2020 de la formation Developpeur Web & Web Mobile du centre AFPA de Niort.</p>
            </footer>
        </div>
        <!-- #global -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>

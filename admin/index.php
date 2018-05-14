<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset utf-8">
    <title>Admin Tir saint Eloi</title>
  </head>


  <body>
<//---------------------------------Vérrification connexion-------------------------->
    <?php
      require_once "../inc/connect.php";
      if (!$_SESSION['admin']) {
        header('location:login.php');
      }
    ?>


<//---------------------------------Articles-------------------------->
    <?php
    $req = $bdd->query('SELECT * FROM articles');
    $article = $req->fetchAll();

    foreach ($article as $article):   ?>

    <div class="article">
      <div class="img-article">
        <img src="http://via.placeholder.com/350x150">
        <span class="card-title"><?= $article['name']?></span>
      </div>
      <div class="content-article">
        <?= $article['content'] ?>
        <br>
        <br>
        <?= $article['Autor'] ?>
      </div>
      <div class="link-article">
        <a href="gestion_article.php?id=<?= $article['id'] ?>">Voir l'article / le modifier</a>
      </div>
    </div>

    <?php endforeach ?>
<//---------------------------------Affichage HTML-------------------------->
    <h3>Bienvenue <?php echo $_SESSION['admin']; ?></h3>

  </body>

</html>

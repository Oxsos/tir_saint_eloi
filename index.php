<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset utf-8">
    <title>Tir saint eloi</title>
  </head>

<//----------------------------------------------------header------------------------------------------------------->

  <body>

<//----------------------------------------------------Articles------------------------------------------------------->
    <?php
      require_once "inc/connect.php";
      $req = $bdd->query('SELECT * FROM articles');
      $article = $req->fetchAll();

      foreach ($article as $article):     ?>

      <div class="article">
        <div class="img-article">
          <img src="http://via.placeholder.com/350x150">
          <span class="card-title"><?= $article['name']?></span>
        </div>
        <div class="content-article">
          <?= $article['content'] ?><br><br><?= $article['Autor'] ?>
        </div>
        <div class="link-article">
          <a href="page_article.php?id=<?= $article['id'] ?>">Voir l'article en entier</a>
        </div>
      </div>

    <?php endforeach ?>
<//----------------------------------------------------footer------------------------------------------------------->


  </body>
</html>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset utf-8">
    <title>Tir saint eloi</title>
  </head>

<//----------------------------------------------------header------------------------------------------------------->
  <?php require_once "inc/connect.php"; ?>
  <body>

<//----------------------------------------------------Articles------------------------------------------------------->

    <div class="article-cont">

    <?php
    $req = $bdd->query('SELECT * FROM articles ORDER BY id DESC LIMIT 30');
    $article = $req->fetchAll();

    foreach ($article as $article):   ?>

      <div class="article">

        <div class="img-article">
          <img src="http://via.placeholder.com/350x150"><br>
          <h3><?= $article['name']?></h3>
        </div>

        <div class="content-article">
          <?php echo substr($article['content'], 0, 400);
           ?>
          <br>
          Par: <?= $article['Autor'] ?>
        </div>

        <div class="link-article">
          <a href="gestion_article.php?id=<?= $article['id'] ?>">Voir l'article / le modifier</a>
        </div>
      </div>
    <?php endforeach ?>
    </div>
<//----------------------------------------------------footer------------------------------------------------------->


  </body>
</html>

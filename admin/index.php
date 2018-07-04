
    <?php require_once"inc/header.php" ?>

    <h2><center>Bienvenue </center></h2>

<//---------------------------------Articles-------------------------->
    <a href="add_article.php" class="button">Ajouter un article</a><br>

    <div class="article-cont">

    <?php
    $req = $bdd->query('SELECT * FROM articles ORDER BY id DESC');
    $article = $req->fetchAll();

    foreach ($article as $article):   ?>

      <div class="pres-article">

        <div class="content-article">
          <center><h2><?= $article['name'] ?></h2><br></center>
          <?php echo substr($article['content'], 0, 300); ?>
          <br>
          <h3>Par: <?= $article['Autor'] ?></h3>
        </div>

        <div class="link-article">
          <a href="gestion_article.php?id=<?= $article['id'] ?>" class="button">Voir l'article / le modifier</a></center>
        </div>
      </div>
    <?php endforeach ?>
    </div>




    <//----------------------------------------------------footer------------------------------------------------------->


       </body>
    </html>

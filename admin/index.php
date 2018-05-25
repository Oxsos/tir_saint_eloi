
    <?php require_once"inc/header.php" ?>

    <h2><center>Bienvenue </center></h2>

<//---------------------------------Articles-------------------------->
    <a href="creat_article.php">Ajouter un article</a><br>

    <div class="article-cont">

    <?php
    $req = $bdd->query('SELECT * FROM articles ORDER BY id DESC');
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

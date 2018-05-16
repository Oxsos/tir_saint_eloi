
    <?php require_once"inc/header.php" ?>

<//---------------------------------Articles-------------------------->
    <a href="creat_article.php">Ajouter un article</a><br>

    <div class="article-cont">

    <?php
    $req = $bdd->query('SELECT * FROM page ORDER BY id DESC');
    $page = $req->fetchAll();

    foreach ($page as $page):   ?>

      <div class="pres-page">

        <div class="content-page">
          <h2><?= $page['nom'] ?></h2><br>
          <?php echo substr($page['content'], 0, 400);?>
        </div>

        <div class="link-article">
          <a href="modif_page.php?id=<?= $page['id'] ?>">Voir la page / la modifier</a>
        </div>
      </div>
    <?php endforeach ?>
    </div>



<//----------------------------------------------------------->


  </body>

</html>

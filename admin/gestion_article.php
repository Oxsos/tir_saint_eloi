
    <?php require_once"inc/header.php" ?>

<//----------------------------------------------------Articles------------------------------------------------------->

    <?php
    require_once '../inc/connect.php';
    require_once '../inc/fonction.php';

    $article = getArticle($bdd,1, $_GET['id']);

    ?>


    <div class="gestion_article">
      <h1><?= $article->name ?></h1>
      <p><?= $article->content ?></p>
      <h5>Par: <?= $article->Autor ?></h5>
      <a class="button" href="modif_article.php?id=<?= $article->id ?>">Modifier</a>
      <a class="button" href="delete_article.php?id=<?= $article->id ?>">Supprimer</a>
    </div>

<//----------------------------------------------------footer------------------------------------------------------->

<?php require_once"inc/footer.php" ?>

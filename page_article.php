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
    require_once 'inc/connect.php';
    require_once 'inc/fonction.php';

    $article = getArticle($bdd,1, $_GET['id']);
    
    ?>


    <div class="article">
      <h1><?= $article->name ?></h1>
      <p><?= $article->content ?></p>
      <h5>Par: <?= $article->Autor ?></h5>
    </div>
<//----------------------------------------------------footer------------------------------------------------------->


   </body>
</html>

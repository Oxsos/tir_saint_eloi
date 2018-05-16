<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset utf-8">
    <title>Tir saint eloi</title>
  </head>
  <body>
<//----------------------------------------------------header------------------------------------------------------->


    <?php require_once"inc/header.php" ?>

<//----------------------------------------------------Articles------------------------------------------------------->

    <?php
    require_once '../inc/connect.php';
    require_once '../inc/fonction.php';

    $article = getArticle($bdd,1, $_GET['id']);

    ?>


    <div class="article">
      <h1><?= $article->name ?></h1>
      <p><?= $article->content ?></p>
      <h5>Par: <?= $article->Autor ?></h5>
    </div>
<//----------------------------------------------------Modification Articles------------------------------------------------------->

<div class="sup-article">
  <a href="delete_article.php?id=<?= $article->id ?>">Supprimer</a>
  <a href="modif_article.php?id=<?= $article->id ?>">Modifier</a>
  <a href="index.php">Retour à la page principale</a>
</div>

<//----------------------------------------------------footer------------------------------------------------------->


   </body>
</html>

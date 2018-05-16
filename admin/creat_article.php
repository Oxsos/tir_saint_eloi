<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset utf-8">
    <title>Tir saint eloi</title>
    <script src="../inc/ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" href="../css/admin.css">
  </head>
  <body>
<//----------------------------------------------------header------------------------------------------------------->

    <?php require_once"inc/header.php" ?>
<//----------------------------------------------------Articles------------------------------------------------------->

    <?php
    require_once '../inc/connect.php';
    require_once '../inc/fonction.php';




    if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
      header('location:index.php');
    }

    if (isset($_POST) AND !empty($_POST)) {
      if (!empty($_POST['name']) AND !empty($_POST['content']) AND !empty($_POST['Autor'])) {
        $req = $bdd->prepare('INSERT INTO articles SET name = :name, content = :content, Autor = :Autor');
        $req->execute([
          'name' => $_POST['name'],
          'content' => $_POST['content'],
          'Autor' => $_POST['Autor'],
        ]);
        $_SESSION['flash']['success'] = 'Article créer!';
      }else {
        $_SESSION['flash']['error'] = 'Champs manquants!';
      }
    }

    ?>


    <div class="modif-article">
      <h1><center> Créer un article:</center></h1>
      <?php
        if (isset($_SESSION['flash']['success'])) {
          echo "<div class='success'>".$_SESSION['flash']['success']."</div>";
        }
        elseif (isset($_SESSION['flash']['error'])) {
          echo "<div class='error'>".$_SESSION['flash']['error']."</div>";
        }
      ?>
      <form method="post">
        <h2>Nom de l'article:</h2>
        <input type="text" name="name">
        <h2>Auteur de l'article:</h2>
        <input type="text" name="Autor">
        <h2>Contenu de l'article:</h2>
        <textarea cols="80" class="ckeditor" id="editeur" name="content" rows="10"></textarea>
        <button>Ajouter l'article</button>
      </form>
    </div>
<//----------------------------------------------------Modification Articles------------------------------------------------------->

<div class="sup-article">
  <a href="index.php">Retour à la page précédente</a>
</div>

<//----------------------------------------------------footer------------------------------------------------------->


   </body>
</html>

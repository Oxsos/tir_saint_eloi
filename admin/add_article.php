

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
        $_SESSION['flash']['success'] = 'Article créé!';
        header('location:index.php');
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
      <form method="post" action="add_article.php" enctype="multipart/form-data">
        <h2>Nom de l'article:</h2>
        <input type="text" name="name">
        <h2>Auteur de l'article:</h2>
        <input type="text" name="Autor">

        <h2>Contenu de l'article:</h2>
        <p>Pour que l'image ne soit pas déformée, après le téléchargment ou la sélection, supprimez les paramètres hauteur et largeur de la photo. (voir notice pour plus de détails)</p>
        <textarea id="newsContenu" name="content" class="CKeditor"></textarea>
        <button>Ajouter l'article</button>
      </form>
    </div>



<//----------------------------------------------------footer------------------------------------------------------->

<?php require_once"inc/footer.php" ?>

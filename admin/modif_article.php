
    <?php require_once"inc/header.php" ?>

<//----------------------------------------------------Articles------------------------------------------------------->

    <?php
    require_once '../inc/connect.php';
    require_once '../inc/fonction.php';

    $article = getArticle($bdd,1, $_GET['id']);

    if (!isset($_GET['id'])) {
      header('location:index.php');
    }

    if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
      header('location:index.php');
    }

    if (isset($_POST) AND !empty($_POST)) {
      if (!empty($_POST['name']) AND !empty($_POST['content']) AND !empty($_POST['Autor'])) {
        $req = $bdd->prepare('UPDATE articles SET name = :name, content = :content, Autor = :Autor WHERE id = :id');
        $req->execute([
          'id' => $_GET['id'],
          'name' => $_POST['name'],
          'content' => $_POST['content'],
          'Autor' => $_POST['Autor']

        ]);
        header('location:index.php');
      }else {
        $_SESSION['flash']['error'] = '';
      }
    }

    ?>


    <div class="modif-article">
      <h1>Modifier l'article: <?= $article->name ?></h1>

      <?php
        if (isset($_SESSION['flash']['success'])) {
          echo "<div class='success'>".$_SESSION['flash']['success']."</div>";
        }
        elseif (isset($_SESSION['flash']['error'])) {
          echo "<div class='error'><h1>".$_SESSION['flash']['error']."</h1></div>";
        }
      ?>
      <form method="post">
        <h2>Nom de l'article:
        <input type="text" name="name" value="<?= $article->name ?>"></h2>
        <h2>Auteur de l'article:
        <input type="text" name="Autor" value="<?= $article->Autor ?>"></h2>
        <h2>Contenu de l'article:</h2>
        <p>Pour que l'image ne soit pas déformée, après le téléchargment ou la sélection, supprimez les paramètres hauteur et largeur de la photo. (voir notice pour plus de détails)</p>
        <textarea id="newsContenu" name="content" class="CKeditor"><?= $article->content ?></textarea>
        <button class="button">Modifier</button>
      </form>
    </div>



<//----------------------------------------------------footer------------------------------------------------------->

<?php require_once"inc/footer.php" ?>

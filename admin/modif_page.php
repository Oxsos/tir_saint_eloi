
    <?php require_once"inc/header.php" ?>

<//----------------------------------------------------Articles------------------------------------------------------->

    <?php
    require_once '../inc/connect.php';
    require_once '../inc/fonction.php';

    $page = getPage($bdd,1, $_GET['id']);

    if (!isset($_GET['id'])) {
      header('location:index.php');
    }

    if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
      header('location:index.php');
    }

    if (isset($_POST) AND !empty($_POST)) {
      if (!empty($_POST['nom']) AND !empty($_POST['content'])) {
        $req = $bdd->prepare('UPDATE page SET nom = :nom, content = :content WHERE id = :id');
        $req->execute([
          'nom' => $_POST['nom'],
          'content' => $_POST['content'],
          'id' => $_GET['id']
        ]);
        $_SESSION['flash']['success'] = 'page modifier!';
      }else {
        $_SESSION['flash']['error'] = 'Champs manquants!';
      }
    }

    ?>


    <div class="modif-page">
      <h1>Modifier la page: <?= $page->nom ?></h1>
      <?php
        if (isset($_SESSION['flash']['success'])) {
          echo "<div class='success'>".$_SESSION['flash']['success']."</div>";
        }
        elseif (isset($_SESSION['flash']['error'])) {
          echo "<div class='error'>".$_SESSION['flash']['error']."</div>";
        }
      ?>
      <form method="post">
        <h2>Nom de la page:</h2>
        <input type="text" nom="nom" value="<?= $page->nom ?>">

        <h2>Contenu de la page:</h2>
        <textarea cols="80" class="ckeditor" id="editeur" nom="content" rows="10"><?= $page->content ?></textarea>
        <button>Modifier</button>
      </form>
    </div>
<//----------------------------------------------------Modification Articles------------------------------------------------------->

<div class="sup-page">
  <a href="acc_page.php">Retour à la page précédente</a>
</div>

<//----------------------------------------------------footer------------------------------------------------------->


   </body>
</html>

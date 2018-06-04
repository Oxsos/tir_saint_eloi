
    <?php require_once"inc/header.php" ?>

<//----------------------------------------------------Articles------------------------------------------------------->

    <?php
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
        $req = $bdd->prepare('UPDATE page SET nom = :nom, content = :content WHERE `page`.id = :id');
        $req->execute([
          'id' => $_GET['id'],
          'nom' => $_POST['nom'],
          'content' => $_POST['content']

        ]);
        header('location:acc_page.php');
      }else {
        $_SESSION['flash']['error'] = 'Champs manquants!';
      }
    }

    ?>


    <div class="modif-article">
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
        <h2>Nom de la page:
        <input type="text" name="nom" value="<?= $page->nom ?>"></h2>
        <h2>Contenue de la page:</h2>
        <textarea id="newsContenu" name="content" class="CKeditor"><?= $page->content ?></textarea>
        <button class="button">Modifier</button>
      </form>
    </div>

<//----------------------------------------------------footer------------------------------------------------------->

<?php require_once"inc/footer.php" ?>

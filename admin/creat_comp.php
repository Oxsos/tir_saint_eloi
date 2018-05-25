

    <?php require_once"inc/header.php" ?>
<//----------------------------------------------------Content------------------------------------------------------->

    <?php
    require_once '../inc/connect.php';
    require_once '../inc/fonction.php';

    if (!isset($_SESSION['admin']) || empty($_SESSION['admin'])) {
      header('location:index.php');
    }

    if (isset($_POST) AND !empty($_POST)) {
      if (!empty($_POST['name']) AND !empty($_POST['content']) AND !empty($_POST['Autor'])) {
        $req = $bdd->prepare('INSERT INTO tireurs SET nom = :nom, photo = :photo');
        $req->execute([
          'nom' => $_POST['nom'],
          'photo' => $_POST['photo'],
        ]);
        $_SESSION['flash']['success'] = 'Article créer!';
      }else {
        $_SESSION['flash']['error'] = 'Champs manquants!';
      }
    }

    ?>


    <div class="modif-article">
      <h1><center> Ajouter un tireur:</center></h1>
      <?php
        if (isset($_SESSION['flash']['success'])) {
          echo "<div class='success'>".$_SESSION['flash']['success']."</div>";
        }
        elseif (isset($_SESSION['flash']['error'])) {
          echo "<div class='error'>".$_SESSION['flash']['error']."</div>";
        }
      ?>
      <form method="post" action="reception.php" enctype="multipart/form-data">
        <h2>Nom du tireur:</h2>
        <input type="text" name="name">

        <h2>Ajouter une photo:</h2>
        <input type="text" name="photo"><br>
        <button>Ajouter le tireur</button>
      </form>
    </div>

<//----------------------------------------------------footer------------------------------------------------------->

<?php require_once"inc/footer.php" ?>

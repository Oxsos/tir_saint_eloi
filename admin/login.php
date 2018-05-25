<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset utf-8">
    <title>Admin Tir saint Eloi</title>
    <link rel="stylesheet" href="../css/admin.css">
  </head>


  <body>
    <?php require_once '../inc/connect.php' ?>
    <div class="container">


<//---------------------------------connection de l'administation---------------->
        <?php
        if(!empty($_POST) && !empty($_POST['pseudo']) && !empty($_POST['pass'])) {
          require_once '../inc/connect.php';
          $req = $bdd->prepare('SELECT * FROM admin WHERE (pseudo = :pseudo OR email = :pseudo)');
          $req->execute(['pseudo' => $_POST['pseudo']]);
          //on récupère l'utilisateur
          $user = $req->fetch(PDO::FETCH_OBJ);
            if(password_verify($_POST['pass'], $user->pass)){
              session_start();
              $_SESSION['admin'] = $user;
          header('location: index.php');
          exit();
        }else{
          $_SESSION['flash']['danger'] = 'identifiant ou mot de passe incorrecte.';
        }
        }

        ?>



<//--------------------------------- formulaire de connection à l'administation---------------->
      <h1>Se connecter</h1>


      <form action="" method="POST">

        <div class="form-group">
            <label for="">Pseudo ou email</label>
            <input class="form-control" type="text" name="pseudo" required>
          </div>

          <div class="form-group">
            <label for="">Mot de passe </label>
              <input class="form-control" type="password" name="pass" required>
          </div>


      <button type="submit" class="btn btn-primary"> Se connecter </button>
      </form>

    </div>

  </body>

</html>

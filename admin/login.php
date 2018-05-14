<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset utf-8">
    <title>Admin Tir saint Eloi</title>
  </head>


  <body>
    <?php require_once '../inc/connect.php' ?>
    <div class="container">
      <h3>Se connecter :</h3>

<//---------------------------------connection de l'administation---------------->
      <?php
        if (isset($_POST) AND !empty($_POST)) {
          if (!empty(htmlspecialchars($_POST['username'])) AND !empty(htmlspecialchars($_POST['password']))) {
            $req = $bdd->prepare('SELECT * FROM admin WHERE pseudo = :pseudo AND pass = :pass');
            $req->execute([
              'pseudo' => $_POST['username'],
              'pass' => $_POST['password']
            ]);
            $user = $req->fetch();
            if ($user) {
              $_SESSION['admin'] = $_POST['username'];
              header('location:index.php');
            }
            else {
              $error = 'Identifiants incorrects';
            }
          }
          else {
            $error = 'Veuillez remplir tous les champs!';
          }
        }
        if (isset($error)) {
          echo '<div class="error">'. $error .'</div>';
        }
        $req = $bdd->query('SELECT * FROM admin');
        $user = $req->fetch();
      ?>


<//--------------------------------- formulaire de connection de l'administation---------------->
      <form action="" method="post">
        Pseudo :<input type="text" name="username"><br>
        Mot de passe :<input type="password" name="password"><br>
        <input type="submit" value="Valider"/>
      </form>

    </div>

  </body>

</html>

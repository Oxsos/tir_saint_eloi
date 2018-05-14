<?php

session_start();

require_once '../inc/connect.php';
if (isset($_SESSION['admin']) AND !empty($_SESSION['admin'])) {
  if (isset($_GET['id'])) {
<<<<<<< HEAD
    $req = $bdd->query('SELECT * FROM articles WHERE id = '.$_GET['id'])
=======
>>>>>>> fdd72ca407fff097bf615c7d050ab722d082c78a
    $article = $req->fetch();
    if ($article) {
      $req = $bdd->query('DELETE FROM articles WHERE id = '.$_GET['id']);
      header('location:index.php');
    }
    else {
      header('location:index.php');
    }
  }
}else {
  header('location:index.php');
}

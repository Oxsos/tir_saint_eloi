<?php

session_start();

if (!$_SESSION['admin']) {
  header('location:login.php');
}

require_once '../inc/connect.php';
if (isset($_SESSION['admin']) AND !empty($_SESSION['admin'])) {
  if (isset($_GET['id'])) {
    $req = $bdd->query('SELECT * FROM admin WHERE `admin`.id = '.$_GET['id']);
    $admin = $req->fetch();
    if ($admin) {
      $req = $bdd->query('DELETE FROM admin WHERE id = '.$_GET['id']);
      header('location:admin.php');
    }
    else {
      header('location:admin.php');
    }
  }
}else {
  header('location:admin.php');
}

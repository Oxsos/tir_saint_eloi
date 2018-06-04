<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset utf-8">
    <title>Admin Tir saint Eloi</title>
    <link rel="stylesheet" href="../css/admin.css">
    <script src="inc/CKeditor/ckeditor.js"></script>
  </head>


  <body>
<//---------------------------------Vérrification connexion-------------------------->
    <?php
      require_once "../inc/connect.php";
      if (!$_SESSION['admin']) {
        header('location:login.php');
      }
    ?>
<//---------------------------------Navbar-------------------------->

    <nav>
      <ul class="ul-navbar">
       <li class="li-navbar"><a href="index.php">Acceuil Administration</a></li>
       <li class="li-navbar"><a href="acc_page.php">Gestion des pages</a></li>
       <li class="li-navbar"><a href="add_comp.php">Résultats compétitions</a></li>
       <li class="li-navbar"><a href="admin.php">Administateurs</a></li>
       <li class="li-navbar"><a href="deconnect.php">Déconnexion</a> </li>

      </ul>
    </nav>

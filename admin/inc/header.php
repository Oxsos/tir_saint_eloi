<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset utf-8">
    <title>Admin Tir saint Eloi</title>
    <link rel="stylesheet" href="../css/admin.css">
    <script src="../inc/tinymce/tinymce.min.js"></script>

    <script type="text/javascript">
      tinymce.init({
        selector: '#myTextarea',
        theme: 'modern',
        width: 1600,
        height: 800,
        subfolder:"",
        plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars code insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor filemanager"
   ],
   image_advtab: true,
   toolbar: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect forecolor backcolor | link unlink anchor | image media | print preview code"
 });

      </script>
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
       <li class="li-navbar"><a href="acc_membre.php">membres</a></li>
       <li class="li-navbar"><a href="acc_comp.php">compétitions</a></li>
       <li class="li-navbar"><a href="admin.php">Administateurs</a></li>
       <li class="li-navbar"><a href="deconnect.php">Déconnexion</a> </li>

      </ul>
    </nav>

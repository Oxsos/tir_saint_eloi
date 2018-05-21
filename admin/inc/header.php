<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset utf-8">
    <title>Admin Tir saint Eloi</title>
    <link rel="stylesheet" href="../css/admin.css">
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

    <script type="text/javascript">
      tinymce.init({
        selector: '#myTextarea',
        theme: 'modern',
        width: 1900,
        height: 1200,
        plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak",
         "searchreplace wordcount visualblocks visualchars code insertdatetime media nonbreaking",
         "table contextmenu directionality emoticons paste textcolor filemanager"
   ],
   image_advtab: true,
        content_css: 'css/content.css',
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
        images_upload_url: "../img"

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
      <ul>
       <li><a href="index.php">Acceuil Administration</a></li>
       <li><a href="add_admin.php">Ajouter un Admin</a></li>
       <li><a href="acc_page.php">Gestion des pages</a></li>
       <li><a href="deconnect.php">Déconnexion</a> </li>
      </ul>
    </nav>

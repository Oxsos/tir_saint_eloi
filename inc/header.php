<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset utf-8">
    <link rel="stylesheet" href="css/master.css">
    <style>
      @import url('https://fonts.googleapis.com/css?family=Anton|Raleway');
    </style>
    <title>Tir saint eloi</title>
  </head>

<//----------------------------------------------------header------------------------------------------------------->
  <?php require_once "inc/connect.php"; ?>

  <body class="main" role="main">


<//-----------------------------------SMART-NAV----------------------------------------->
    <nav id="navigation" role="navigation" class="navigation">
      <a href="index.php">Acceuil</a>
      <a href="#">Nos activités</a>
        <a href="#" class="niv2">Ecole de tir</a>
        <a href="#" class="niv2">Adulte</a>
        <a href="#" class="niv2">Handisport</a>
      <a href="#">Le Club</a>
        <a href="#" class="niv2">L'histoire du club</a>
        <a href="#" class="niv2">Le stand</a>
        <a href="#" class="niv2">L'équipe</a>
        <a href="index.php">Contacts et tarifs</a>
    </nav>


      <button class="nav-button" role="button" type="button" aria-label="navigation"></button>

<//-----------------------------------IMG-LOGO----------------------------------------->

    <div class="header-img">
      <img class="bg-img" src="img/header.jpg" alt="">
      <img class="logo-img" src="img/logo.png" alt="">
    </div>


<//-----------------------------------NAVBAR----------------------------------------->

    <nav class="big-nav">
      <ul>
      <li><a href="index.php">Acceuil</a></li>

      <li class="dropdown">
        <a href="activité.php" class="dropbtn">Nos activités</a>
        <div class="dropdown-content">
          <a href="ecole.php">Ecole de tir</a>
          <a href="adulte.php">Adulte</a>
          <a href="handisport.php">Handisport</a>
        </div>
      </li>

      <li class="dropdown">
        <a href="club.php" class="dropbtn">Le Club</a>
        <div class="dropdown-content">
          <a href="histoire.php">L'histoire du club</a>
          <a href="stand.php">Le stand</a>
          <a href="equipe.php">L'équipe</a>
        </div>
      </li>

      <li><a href="contact.php">Contacts et tarifs</a></li>

    </ul>
    </nav>

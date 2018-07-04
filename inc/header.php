<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset utf-8">

    <meta name="description" content="Le club de tir Saint Eloi ou club de tir d'Exideuil sur Vienne vous ouvre ses portes" />
    <meta name="keywords" content="tir sportif, tir charente, tir exideuil, tir saint eloi, école de tir, club de tir, handisport" />
    <meta name="robots" content="index, follow" />

    <link rel="stylesheet" href="css/master.css">
    <style>
      @import url('https://fonts.googleapis.com/css?family=Anton|Raleway');
    </style>
    <title>Club de tir Saint Eloi</title>
  </head>

<//----------------------------------------------------header------------------------------------------------------->
  <?php require_once "inc/connect.php"; ?>

  <body class="main" role="main">


<//-----------------------------------SMART-NAV----------------------------------------->
    <nav id="navigation" role="navigation" class="navigation">
      <a href="index.php" class="niv1">Acceuil</a>
      <a href="activité.php" class="niv1">Nos activités</a>
        <a href="ecole.php" class="niv2">Ecole de tir</a>
        <a href="adulte.php" class="niv2">Adulte</a>
        <a href="handisport.php" class="niv2">Handisport</a>
      <a href="club.php" class="niv1">Le Club</a>
        <a href="histoire.php" class="niv2">L'histoire du club</a>
        <a href="stand.php" class="niv2">Le stand</a>
        <a href="resultat.php" class="niv2">Nos résultats</a>
        <a href="equipe.php" class="niv2">L'équipe</a>
      <a href="index.php" class="niv1">Contacts et tarifs</a>
    </nav>


      <button class="nav-button" role="button" type="button" aria-label="navigation"></button>

<//-----------------------------------IMG-LOGO----------------------------------------->

    <div class="header-img">
      <img class="bg-img" src="img/header.jpg" alt="">
      <img class="logo-img" src="img/logo.png" alt="">
    </div>


<//-----------------------------------NAVBAR----------------------------------------->

    <nav class="big-nav">
      <ul class="ul-navbar">
      <li class="li-navbar"><a href="index.php">Acceuil</a></li>

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
          <a href="resultat.php">Nos résultats</a>
          <a href="equipe.php">L'équipe</a>
        </div>
      </li>

      <li class="li-navbar"><a href="contact.php">Contacts et tarifs</a></li>

    </ul>
    </nav>

<//-----------------------------------BOUTON-FB----------------------------------------->

<a href="https://www.facebook.com/ClubDeTirSaintEloi/" class="bouton-rs"> <img src="img/lgfb.png" alt="lien facebook"></a>

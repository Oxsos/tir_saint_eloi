<?php require_once"inc/header.php" ?>

<//----------------------------------------------------content------------------------------------------------------->

<a href="creat_tireur.php">Ajouter un tireur</a><br>

<div class="tireur-cont">

<?php
$req = $bdd->query('SELECT * FROM `tireurs`');
$tireurs = $req->fetchAll();

$req = $bdd->query('SELECT * FROM page ORDER BY id DESC');
$page = $req->fetchAll();

foreach ($tireurs as $tireurs):   ?>

  <div class="pres-page">

      <h2><?= $tireurs['nom'] ?></h2><br>
      <img src="<?= $tireurs['photo'] ?>">
      <a href="modif_tireur.php?id=<?= $tireurs['id'] ?>">Voir la page / la modifier</a>

  </div>
<?php endforeach ?>
</div>


<//----------------------------------------------------footer------------------------------------------------------->

<?php require_once"inc/footer.php" ?>

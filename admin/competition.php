<?php require_once"inc/header.php" ?>

<//----------------------------------------------------content------------------------------------------------------->

<a href="add_comp.php">Ajouter une competition</a><br>

<div class="tireur-cont">

<?php
$req = $bdd->query('SELECT * FROM `competition` ');
$competition = $req->fetchAll();

foreach ($competition as $competition):   ?>

  <div class="pres-page">

      <h2><?= $competition['competition'] ?></h2><br>
      <?= $competition['dates'] ?>
      <a href="modif_comp.php?id=<?= $competition['id'] ?>">Voir la page / la modifier</a>

  </div>
<?php endforeach ?>
</div>


<//----------------------------------------------------footer------------------------------------------------------->

<?php require_once"inc/footer.php" ?>

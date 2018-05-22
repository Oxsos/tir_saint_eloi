
    <?php require_once"inc/header.php" ?>

<//----------------------------------------------------Articles------------------------------------------------------->

<div class="admin-cont">

<?php
$req = $bdd->query('SELECT * FROM admin ORDER BY id DESC');
$admin = $req->fetchAll();

foreach ($admin as $admin):   ?>

  <div class="liste-admin">
    <ul>
      <li>Pseudo:<?= $admin['pseudo'] ?></li>
      <li>email: <?= $admin['email'] ?></li>

      <?php
      if ($_SESSION['admin']->id == 12) {?>
        <li><a href="supp_admin.php?id=<?= $admin->id ?>">Supprimer</a></li>
      <?php } ?>


    </ul>
  </div>
<?php endforeach ?>
</div>

<//----------------------------------------------------Modification Articles------------------------------------------------------->

<div class="sup-article">
  <a href="add_admin.php">Ajouter un Admin</a><br>
  <center> <a href="index.php">Retour à la page principale</a></center>
</div>

<//----------------------------------------------------footer------------------------------------------------------->


   </body>
</html>

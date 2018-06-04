
<?php require_once"inc/header.php" ?>

<//----------------------------------------------------admin------------------------------------------------------->
<div class="sup-article">
  <a class="button" href="add_admin.php">Ajouter un Admin</a><br>

</div>
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
      if ($_SESSION['admin']->id == 12 OR $_SESSION['admin']->id == 11) {?>
        <li><a class="button" href="supp_admin.php?id=<?= $admin['id'] ?>">Supprimer</a></li>
      <?php } ?>


    </ul>
  </div>
<?php endforeach ?>
</div>

<//----------------------------------------------------Modification admin------------------------------------------------------->




<?php require_once"inc/footer.php" ?>

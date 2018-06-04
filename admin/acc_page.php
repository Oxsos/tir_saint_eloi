
    <?php require_once"inc/header.php" ?>

<//---------------------------------Articles-------------------------->

    <div class="page-cont">

    <?php
    $req = $bdd->query('SELECT * FROM page ORDER BY id DESC');
    $page = $req->fetchAll();

    foreach ($page as $page):   ?>

      <div class="pres-page">

        <div class="content-page">
          <center><h2><?= $page['nom'] ?></h2><br></center>

        </div>

        <div class="link-page">
          <a class="button" href="modif_page.php?id=<?= $page['id'] ?>">Voir la page / la modifier</a>
        </div>
      </div>
    <?php endforeach ?>
    </div>



    <//----------------------------------------------------footer------------------------------------------------------->

    <?php require_once"inc/footer.php" ?>

<?php require_once"inc/header.php" ?>

<//----------------------------------------------------CONTENT------------------------------------------------------->




<//-----------------------------------contenue----------------------------------------->


      <div class="paragraphe">

        <div class="content-paragraphe">
          <?php
          $req = $bdd->query('SELECT * FROM page WHERE id= 13');
          $page = $req->fetchAll();
          foreach ($page as $page):   ?>

            <p><?= $page['content']?></p>

          <?php endforeach ?>
        </div>

      </div>

<//-----------------------------------parallax----------------------------------------->

      <div class="parallax-1">
      </div>


<//----------------------------------------------------------------------------------------------------------------->
<?php require_once"inc/footer.php" ?>

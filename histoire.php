<?php require_once"inc/header.php" ?>

<//----------------------------------------------------CONTENT------------------------------------------------------->


<//-----------------------------------parallax----------------------------------------->

      <div class="parallax-1">

      </div>

<//-----------------------------------contenue----------------------------------------->


      <div class="paragraphe">

        <div class="content-paragraphe">
          <?php
          $req = $bdd->query('SELECT * FROM page WHERE id= 11');
          $page = $req->fetchAll();
          foreach ($page as $page):   ?>

            <p><?= $page['content']?></p>

          <?php endforeach ?>
        </div>

      </div>


<//----------------------------------------------------------------------------------------------------------------->
<?php require_once"inc/footer.php" ?>

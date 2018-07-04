<?php require_once"inc/header.php" ?>

<//----------------------------------------------------CONTENT------------------------------------------------------->



<//-----------------------------------contenue----------------------------------------->


      <div class="paragraphe">

        <div class="content-paragraphe">
          <?php
          $req = $bdd->query('SELECT * FROM page WHERE id= 12');
          $page = $req->fetchAll();
          foreach ($page as $page):   ?>

            <p><?= $page['content']?></p>

          <?php endforeach ?>
        </div>

      </div>

      <div class="affichage-pdf">
        <h1>Résultats des compétions</h1>
        <?php
          if($dossier = opendir('upload')){
            while(false !== ($fichier = readdir($dossier))){
              if($fichier != '.' && $fichier != '..' && $fichier != 'index.php'){
              echo '<li class"resultat"><a href="upload/' . $fichier . '">' . $fichier . '</a></li>';
          }}}
        ?>

      </div>

<//-----------------------------------parallax----------------------------------------->

      <div class="parallax-1">
      </div>

<//----------------------------------------------------------------------------------------------------------------->
<?php require_once"inc/footer.php" ?>

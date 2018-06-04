<?php require_once"inc/header.php" ?>

<//----------------------------------------------------CONTENT------------------------------------------------------->


<//-----------------------------------Para-1----------------------------------------->

      <div class="paragraphe">

        <div class="content-paragraphe">
          <?php
          $req = $bdd->query('SELECT * FROM page WHERE id= 2');
          $page = $req->fetchAll();
          foreach ($page as $page):   ?>

            <p><?= $page['content']?></p>

          <?php endforeach ?>
        </div>

      </div>


<//-----------------------------------parallax----------------------------------------->

      <div class="parallax-1">

      </div>

<//-----------------------------------Para-2----------------------------------------->

      <div class="paragraphe">

        <div class="content-paragraphe">
          <?php
          $req = $bdd->query('SELECT * FROM page WHERE id= 3');
          $page = $req->fetchAll();
          foreach ($page as $page):   ?>

            <p><?= $page['content']?></p>

          <?php endforeach ?>
        </div>

      </div>
<//-----------------------------------bandeau----------------------------------------->

      <img src="img/prestir.jpg" alt="" class="photo-band">


<//-----------------------------------parallax----------------------------------------->

    <div class="parallax-2">

    </div>

<//-----------------------------------articles----------------------------------------->
    <div class="article-cont">
      <center><h1 class="titre">Articles</h1></center>
    <?php
    $req = $bdd->query('SELECT * FROM articles ORDER BY id DESC LIMIT 30');
    $article = $req->fetchAll();

    foreach ($article as $article):   ?>

      <div class="article">

        <div class="content-article">
          <center><h2><?= $article['name']?></h2></center>
          <?php echo substr($article['content'], 0, 10000);
           ?>
           <br>
          <br>
          Par: <?= $article['Autor'] ?>
        </div>

      </div>
    <?php endforeach ?>
    </div>
<//-----------------------------------parallax----------------------------------------->

    <div class="parallax-3">

    </div>


<//------------------------------------------------------------------------------------------------------------------->

<?php require_once"inc/footer.php" ?>

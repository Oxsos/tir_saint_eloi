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

      <div id="slide1">

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

<//-----------------------------------articles----------------------------------------->
    <div class="article-cont">

    <?php
    $req = $bdd->query('SELECT * FROM articles ORDER BY id DESC LIMIT 30');
    $article = $req->fetchAll();

    foreach ($article as $article):   ?>

      <div class="article">

        <div class="img-article">
          <img src="http://via.placeholder.com/350x150"><br>
          <h3><?= $article['name']?></h3>
        </div>

        <div class="content-article">
          <?php echo substr($article['content'], 0, 400);
           ?>
          <br>
          Par: <?= $article['Autor'] ?>
        </div>

        <div class="link-article">
          <a href="gestion_article.php?id=<?= $article['id'] ?>">Voir l'article / le modifier</a>
        </div>
      </div>
    <?php endforeach ?>
    </div>


<//------------------------------------------------------------------------------------------------------------------->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="script/jquery.parallax-1.1.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          $('#slide1').parallax("center", 900, 0.1, true);
      })
    </script>
<?php require_once"inc/footer.php" ?>

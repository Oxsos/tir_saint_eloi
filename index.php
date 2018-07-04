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


<//-----------------------------------parallax----------------------------------------->

    <div class="parallax-2">

    </div>

<//-----------------------------------articles----------------------------------------->
    <div class="article-cont">
      <center><h1 class="titre">Articles</h1></center>
    <?php
    //INPUT
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $perPage = isset($_GET['per-page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 4;

    //position de départ
    $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;

    //appel des articles ordonnés par id invers + limitation du nombre d'articles
    $article = $bdd->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articles ORDER BY id DESC LIMIT {$start}, {$perPage}");
    $article->execute();
    $article = $article->fetchAll(PDO::FETCH_ASSOC);

    //page
    $total = $bdd->query('SELECT FOUND_ROWS() as total')->fetch()['total'];
    $page = ceil($total / $perPage);


    foreach ($article as $article):   ?>

      <div class="article">

        <div class="content-article">
          <center><h2><?= $article['name']?></h2></center>
          <?php echo($article['content']);
           ?>
           <br>
          <br>
          Par: <?= $article['Autor'] ?>
        </div>

      </div>
    <?php endforeach ?>

    <div class="pagination">
      <?php for($x = 1; $x <= $page; $x++): ?>
        <a href="?page=<?php echo $x; ?>"><?php echo $x; ?></a>
      <?php endfor; ?>
    </div>
  </div>
<//-----------------------------------parallax----------------------------------------->

    <div class="parallax-3">

    </div>


<//------------------------------------------------------------------------------------------------------------------->

<?php require_once"inc/footer.php" ?>

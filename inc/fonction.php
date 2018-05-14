<?php

function getArticle($bdd, $nb = null, $id = null){
  if ($nb AND !$id) {
    $req = $bdd->query('SELECT * FROM articles LIMIT'.$nb);
    $article = $req->fetchAll();
  }elseif ($id) {
    $req = $bdd->query('SELECT * FROM articles WHERE id ='.$id);
    $article = $req->fetchObject();
  }else {
    $req = $bdd->query('SELECT * FROM articles');
    $article = $req->fetchAll();
  }
  return $article;
}

 ?>

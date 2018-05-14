<?php

function getArticle($bdd, $nb = null, $id = null){
  if ($nb AND !$id) {
    $req = $bdd->query('SELECT * FROM articles LIMIT'.$nb);
    $articles = $req->fetchAll();
  }elseif ($id) {
    $req = $bdd->query('SELECT * FROM articles WHERE id ='.$id);
    $articles = $req->fetchObject();
  }else {
    $req = $bdd->query('SELECT * FROM articles');
    $articles = $req->fetchAll();
  }
  return $articles;
}

 ?>

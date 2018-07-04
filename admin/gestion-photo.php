
<?php require_once"inc/header.php";?>

<//--------------------------------------------------------------------------------------------------------------->

<div class="gestion-photo">
  <div class="visuel-photo">
<?php
    if($dossier = opendir('../inc/KCfinder/img/images/')){
      while(false !== ($fichier = readdir($dossier))){
        if($fichier != '.' && $fichier != '..' && $fichier != 'index.php'){
        echo '<li><img src="../inc/KCfinder/img/images/' . $fichier . '" alt=""><br><a href="../inc/KCfinder/img/images/' . $fichier . '">' . $fichier . '</a></li>';
    }}}



  if (!empty($_POST['file_name'])) {

    $fichier = '../inc/KCfinder/img/images/' .$_POST['file_name'];
    unlink( $fichier ) ;
    header('location:gestion-photo.php');
    }

?>
</div>

<div class="suppression-photo">
  <form class="" action="gestion-photo.php" method="post">
    <label for="">Coller le nom du fichier à supprimer:</label>
    <input type="text" name="file_name">
    <br>
    <button type="submit" class="button"> Supprimer </button>
  </form>

</div>
</div>





<//--------------------------------------------------------------------------------------------------------------->

<?php require_once"inc/footer.php" ?>

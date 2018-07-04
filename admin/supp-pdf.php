
<?php require_once"inc/header.php";?>

<div class="suppression-pdf">

<?php
    if($dossier = opendir('../upload')){
      while(false !== ($fichier = readdir($dossier))){
        if($fichier != '.' && $fichier != '..' && $fichier != 'index.php'){
        echo '<li><a href="../upload/' . $fichier . '">' . $fichier . '</a></li>';
    }}}



  if (!empty($_POST['file_name'])) {

    $fichier = '../upload/' .$_POST['file_name'];
    unlink( $fichier ) ;
    header('location:add_comp.php');
    }

?>


  <form class="" action="supp-pdf.php" method="post">
    <label for="">Entrez le nom du fichier à supprimer:</label>
    <input type="text" name="file_name">
    <br>
    <button type="submit"  class="button"> Supprimer </button>
  </form>

</div>


<//----------------------------------------------------footer------------------------------------------------------->

<?php require_once"inc/footer.php" ?>

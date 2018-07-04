

    <?php require_once"inc/header.php" ?>
<//----------------------------------------------------upload-fichier------------------------------------------------------->
<div class="upload">
  <h2>Résultat de competition (fichier pdf):</h2>
  <p>pensez à donner un nom compréhensible avant d'upload le fichier</p>
  <form enctype="multipart/form-data"
  	action="<?php print $_SERVER['PHP_SELF']?>" method="post">
  <p><input type="hidden" name="MAX_FILE_SIZE" value="200000" /> <input
  	type="file" name="pdfFile" /><br />
  <br />
  <input  class="button" type="submit" value="Envoyer" /></p>
  </form>
</div>



<//----------------------------------------------------affichage-fichier------------------------------------------------------->

<div class="affichage-pdf">
  <?php
    if($dossier = opendir('../upload')){
      while(false !== ($fichier = readdir($dossier))){
        if($fichier != '.' && $fichier != '..' && $fichier != 'index.php'){
        echo '<li><a href="../upload/' . $fichier . '">' . $fichier . '</a></li>';
    }}}
  ?>

</div>

<//----------------------------------------------------supprimer-fichier------------------------------------------------------->

<?php
if (!empty($_POST['file_name'])) {

  $fichier = '../upload/' .$_POST['file_name'];
  unlink( $fichier ) ;
  header('location:add_comp.php');
  }

?>

<div class="suppression-pdf">

<form class="" action="supp-pdf.php" method="post">
  <label for="">Entrez le nom du fichier à supprimer:</label>
  <input type="text" name="file_name">
  <br>
  <button type="submit"  class="button"> Supprimer </button>
</form>

</div>


<//----------------------------------------------------footer------------------------------------------------------->

<?php require_once"inc/footer.php" ?>

<?php
if ( isset( $_FILES['pdfFile'] ) ) {
  if ($_FILES['pdfFile']['type'] == "application/pdf") {
    $source_file = $_FILES['pdfFile']['tmp_name'];
    $dest_file = "../upload/".$_FILES['pdfFile']['name'];

    if (file_exists($dest_file)) {
      print "Le nom du fichier existe déjà";
    }
    else {
      move_uploaded_file( $source_file, $dest_file )
      or die ("Error!!");
      if($_FILES['pdfFile']['error'] == 0) {
        print "Le pdf à bien était envoyé!";
        print "<b><u>Details : </u></b><br/>";
        print "Nom : ".$_FILES['pdfFile']['name']."<br.>"."<br/>";
        print "Taille : ".$_FILES['pdfFile']['size']." bytes"."<br/>";
        print "lacalisation : upload/".$_FILES['pdfFile']['name']."<br/>";
        header('location:add_comp.php');
      }
    }
  }
  else {
    if ( $_FILES['pdfFile']['type'] != "application/pdf") {
      print "Une erreur est survenue lors de l'envoie : ".$_FILES['pdfFile']['name']."<br/>";
      print "Ce fichier n'est peut-être pas un PDF"."<br/>";
      print "Code d'erreur : ".$_FILES['pdfFile']['error']."<br/>";
    }
  }
}
?>

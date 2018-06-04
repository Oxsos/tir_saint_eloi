

    <?php require_once"inc/header.php" ?>
<//----------------------------------------------------upload-fichier------------------------------------------------------->


<form action="inc/upload_acceptor.php" method="post" enctype="multipart/form-data">
				Envoyez ce fichier:
	<input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
	<input name="filepdf" type="file">
	<input type="submit" value="Upload" name="submit">
</form>



<//----------------------------------------------------footer------------------------------------------------------->

<?php require_once"inc/footer.php" ?>

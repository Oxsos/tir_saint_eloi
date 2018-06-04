<?php

if(isset($_FILES['filepdf']['size']))
{
	$pdf = time();
	$nompdf = str_replace(' ','',$pdf).".pdf";
	$pdf = "../upload/".str_replace(' ','',$pdf).".pdf";
	move_uploaded_file($_FILES['pdf']['tmp_name'],$pdf);
}
?>

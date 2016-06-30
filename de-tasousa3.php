<?php


$filefile = 'uploadfiles.txt';
move_uploaded_file($_FILES['userfile']['tmp_name'], $filefile);


	if (isset(($_FILES["userfile"]))){
		echo $_FILES["userfile"];
}























?>

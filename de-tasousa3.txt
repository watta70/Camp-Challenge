<?php

var_dump($_FILES);
$filefile = 'uploadfiles.txt';
move_uploaded_file($_FILES['userfile']['tmp_name'], $filefile);


























?>

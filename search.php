<?php
$k = isset($_GET['k'])? htmlspecialchars($_GET['k']) : '';


	$files = scandir(DIR,1);
	foreach($files as $file)
	$txt.=$file;
	echo $txt;

?>

<?php
include('header.php');
include('Parser.php');

$filename=$_GET['name'];
$content = file_get_contents($filename);
$lines = explode("\n", $content);
echo '<h3>'.substr($lines[2],7).'</h3>';
<<<<<<< HEAD
echo "<p>".substr($filename,strlen(DIR),10)."</p>";
=======
echo '<p>'.substr($filename,strlen(DIR),10).'</p><br>';
>>>>>>> 61b69681d4880b7bf2e2ecb02dc00bd858c806ff
$skipped_content = implode("\n", array_slice($lines, 5));

$parser = new HyperDown\Parser;
echo $parser->makeHtml($skipped_content);

include('footer.php'); 
?>


<?php
include('header.php');
include('Parser.php');

$filename='2021-02-04-typora-图片.md';

$content = file_get_contents($filename);
$lines = explode("\n", $content);
$skipped_content = implode("\n", array_slice($lines, 5));

$parser = new HyperDown\Parser;
echo $parser->makeHtml($skipped_content);

include('footer.php'); 
?>

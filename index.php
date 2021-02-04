<?php
include('header.php');

if ($handle = opendir(DIR)) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            echo "<a href='view.php?name=".DIR."$entry'>".$entry."</a><br>";
        }
    }
    closedir($handle);
}

include('footer.php');
?>
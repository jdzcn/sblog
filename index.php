<?php

function read_line($fileName) {
    #do{
        #$fileSize=filesize($fileName);
        $fp = fopen($fileName, 'r');
        fseek($fp, 23);
        $data = fread($fp, 100);  // assumes lines are < 4096 characters
        fclose($fp);
        return explode("\n",$data)[0];
        #$a = explode("\n",$data);
    #}while(count($a)<1);
    #return $a[0];
}


include('header.php');
#echo $_GET['key'];
$q = isset($_GET['key'])? htmlspecialchars($_GET['key']) : '';
if($q) {
    exec("find ".DIR." -name '*$q*'",$result);
    
    foreach($result as $line)
    #echo $line;
    echo "<a href='view.php?name=$line'>".read_line($line)."</a><br>";
}
else
if ($handle = opendir(DIR)) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            echo "<a href='view.php?name=".DIR."$entry'>".read_line(DIR.$entry)."</a><br>";
            #echo DIR.$entry;
        }
    }
    closedir($handle);
}

include('footer.php');
?>
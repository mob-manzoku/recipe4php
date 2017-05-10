<?php
foreach(glob('*') as $file){
    if(is_file($file)){
        $link = htmlspecialchars($file);
        echo "<p><a href=/$link>$link</a></p>";
    }
}
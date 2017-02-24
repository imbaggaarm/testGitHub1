<?php
    mysql_connect("sql108.byethost7.com", "b7_19246899", "toiphaitrothanhnguoithanhcongvatot");
    mysql_select_db("b7_19246899_image");
    mysql_query("SET NAMES 'utf8'");
    
    $cacbaihat = mysql_query("SELECT * FROM music");
    while($music = mysql_fetch_array($cacbaihat)){
        echo $music["tenbh"];
        echo "###";
    }
    ?>
